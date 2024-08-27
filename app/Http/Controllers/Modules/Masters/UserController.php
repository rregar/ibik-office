<?php

namespace App\Http\Controllers\Modules\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modules\Masters\UserDetail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.masters.user.index');
    }

    public function getCmsTable(Request $request)
    {
        if (auth()->user()->can('manage_masters')) {
            $query = User::select('name', 'email');

            $data = $query->get();

            $data->transform(function ($item, $key) {
                $item->DT_RowIndex = $key + 1;
                $item->name = $item->name ?? 'Data tidak ditemukan';
                $item->name = $item->email ?? 'Data tidak ditemukan';
                $item->action = "Aksi Belum Ada";
                return $item;
            });

            return ['data' => $data];
        } else {
            $data = [];
            return ['data' => $data];
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
