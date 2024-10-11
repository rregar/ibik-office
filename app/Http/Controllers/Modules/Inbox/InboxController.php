<?php

namespace App\Http\Controllers\Modules\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules\Masters\Faculty;
use App\Models\Modules\Masters\Prodi;
use App\Models\Modules\Masters\Unit;
use App\Models\Modules\Masters\LetterType;
use App\Models\Modules\Masters\LetterClassification;

class InboxController extends Controller
{
    public function create()
    {
        return view('guest.create-inbox');
    }

    function getProdiBasedFaculty(Request $request)
    {
        $data = Prodi::where('faculty_id', $request->faculty_id)->get();
        return response()->json(['data' => $data]);
    }
}
