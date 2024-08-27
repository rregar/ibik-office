<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('authentication.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('authentication.email.reset-password', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Akun ePBJ');
        });

        return redirect()->back()->with(['status' => 'success', 'message' => 'Kami telah mengirimkan tautan untuk reset kata sandi ke email anda!']);
    }

    public function showResetForm($token)
    {
        return view('authentication.reset-password', ['token' => $token]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
                ])
            ->first();

        if (!$updatePassword) {
            return redirect()->back()->with(['status' => 'error', 'message' => 'Token telah kadaluarsa!']);
        }

        User::where('email', $request->email)->update([
            'password' => bcrypt($request->password),
        ]);

        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();

        return redirect()->back()->with(['status' => 'success', 'message' => 'Kata sandi berhasil diubah!']);
    }
}
