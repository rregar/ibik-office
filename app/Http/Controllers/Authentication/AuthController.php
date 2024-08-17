<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Authentication\AuthRequest;

class AuthController extends Controller
{
    public function signIn()
    {
        return response()->json(200);
    }

    public function authenticate(AuthRequest $request)
    {
        // Baris logika untuk melakukan sign in
        if (auth()->attempt($request->only('email', 'password'))) {
            // Apabila autentikasi berhasil
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with(['status' => 'success', 'message' => 'melakukan sign in.']);
        }
        // Apabila autentikasi gagal
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok.',
        ])->withInput();
    }

    public function signOut(Request $request)
    {
        // Menghapus atau menghancurkan sesi login dari user
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sign-in');
    }
}
