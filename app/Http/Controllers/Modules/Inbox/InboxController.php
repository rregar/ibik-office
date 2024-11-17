<?php

namespace App\Http\Controllers\Modules\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Modules\Masters\Faculty;
use App\Models\Modules\Masters\Prodi;
use App\Models\Modules\Masters\Unit;
use App\Models\Modules\Masters\LetterType;
use App\Models\Modules\Masters\LetterClassification;
use App\Models\Modules\Inbox\Inbox;

class InboxController extends Controller
{
    public function index()
    {
        return view('modules.inbox.index');
    }

    public function getCmsTable(Request $request)
    {
        $data = Inbox::select(
                'id',
                'prodi_id',
                'unit_id',
                'letter_type_id',
                'letter_classification_id',
                'faculty_id',
                'type',
                'name',
                'phone_number',
                'email',
                'address',
                'date',
                'number',
                'attachment',
                'subject',
                'file',
            )
            ->orderByDesc('id')
            ->get();
    
        $data->transform(function ($item, $key) {
            $item->DT_RowIndex = $key + 1;
            $item->id = $item->id ?? 'Data tidak ditemukan';
            $item->prodi_id = $item->prodi_id ?? 'Data tidak ditemukan';
            $item->unit_id = $item->unit_id ?? 'Data tidak ditemukan';
            $item->letter_type_id = $item->letter_type_id ?? 'Data tidak ditemukan';
            $item->letter_classification_id = $item->letter_classification_id ?? 'Data tidak ditemukan';
            $item->faculty_id = $item->faculty_id ?? 'Data tidak ditemukan';
            $item->type = $item->type ?? 'Data tidak ditemukan';
            $item->name = $item->name ?? 'Data tidak ditemukan';
            $item->phone_number = $item->phone_number ?? 'Data tidak ditemukan';
            $item->email = $item->email ?? 'Data tidak ditemukan';
            $item->address = $item->address ?? 'Data tidak ditemukan';
            $item->date = $item->date ?? 'Data tidak ditemukan';
            $item->number = $item->number ?? 'Data tidak ditemukan';
            $item->attachment = $item->attachment ?? 'Data tidak ditemukan';
            $item->subject = $item->subject ?? 'Data tidak ditemukan';
            $item->file = $item->file ?? 'Data tidak ditemukan';
            $item->action = "
                <div class='d-flex'>
                    <a href='' class='btn btn-warning mx-2' title='EDIT'>
                        <i class='fas fa-edit'></i>
                    </a>
                    <form action='' method='POST' class='mx-2'>
                        <button type='submit' class='btn btn-danger delete-button' title='HAPUS'>
                            <i class='fas fa-trash-alt'></i>
                        </button>
                    </form>
                </div>
            ";
            return $item;
        });
    
        return ['data' => $data];
    }

    public function create()
    {
        return view('guest.create-inbox');
    }

    function getProdiBasedFaculty(Request $request)
    {
        $data = Prodi::where('faculty_id', $request->faculty_id)->get();
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'faculty_id' => 'required_if:type,Internal',
            'prodi_id' => 'required_if:type,Internal',
            'letter_type_id' => 'required',
            'letter_classification_id' => 'required',
            'unit_id' => 'required',
            'type' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'date' => 'required|date',
            'number' => 'required|string|max:255',
            'attachment' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf',
        ]);
    
        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            $errorMessages = $validator->errors()->all();
            // return redirect()->back()->with(['status' => 'error', 'message' => implode(', ', $errorMessages)])->withInput();
            return redirect()->back()->with(['status' => 'error', 'message' => $errorMessages]);
        }
    
        DB::beginTransaction();
    
        try {
            // Simpan file yang diunggah
            if ($request->hasFile('file')) {
                // Direktori penyimpanan
                $directory = 'inbox';
    
                // Pastikan direktori ada, jika tidak maka buat direktori
                if (!Storage::exists($directory)) {
                    Storage::makeDirectory($directory);
                }
    
                // Buat nama file dengan timestamp dan uniqid
                $fileName = time() . '-' . uniqid() . '.pdf';
    
                // Simpan file ke storage/public/inbox dengan nama file yang telah dibuat
                $request->file('file')->storeAs($directory, $fileName, 'public');
            }
    
            // Simpan data ke database
            Inbox::create([
                'prodi_id' => $request->input('prodi_id'),
                'unit_id' => $request->input('unit_id'),
                'letter_type_id' => $request->input('letter_type_id'),
                'letter_classification_id' => $request->input('letter_classification_id'),
                'faculty_id' => $request->input('faculty_id'),
                'type' => $request->input('type'),
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'date' => $request->input('date'),
                'number' => $request->input('number'),
                'attachment' => $request->input('attachment'),
                'subject' => $request->input('subject'),
                'file' => $fileName, // Simpan nama file saja di database
            ]);
    
            DB::commit();
            return redirect()->back()->with(['status' => 'success', 'message' => 'Surat Berhasil Dikirim!']);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }
}
