<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\Authentication\AuthRequest;

class AuthController extends Controller
{
    public function index()
    {
        return "view";
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

    public function signIn()
    {
        // Memanggil fungsi authenticate untuk melakukan sign in
        return $this->authenticate(new AuthRequest);
    }

    public function signOut()
    {
        // Menghapus atau menghancurkan sesi login dari user
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sign-in');
    }
}
