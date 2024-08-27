<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Authentication\AuthRequest;
use Mews\Captcha\Captcha;

class AuthController extends Controller
{
    public function signIn()
    {
        // Baris untuk mereturn atau memberikan respon view
        return view('authentication.sign-in');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_src()]);
    }

    public function authenticate(AuthRequest $request)
    {
        // Baris logika untuk melakukan sign in
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            // Apabila autentikasi berhasil
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

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
