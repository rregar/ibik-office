<?php

namespace App\Http\Controllers\Modules\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function create()
    {
        return view('guest.create-inbox');
    }
}
