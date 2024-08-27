<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('authentication.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Alamat email harus diisi.',
            'email.email' => 'Alamat email tidak valid.',
            'email.exists' => 'Alamat email tidak ditemukan.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ], [
            'token.required' => 'Token harus diisi.',
            'email.required' => 'Alamat email harus diisi.',
            'email.email' => 'Alamat email tidak valid.',
            'email.exists' => 'Alamat email tidak ditemukan.',
            'password.required' => 'Kata sandi harus diisi.',
            'password.min' => 'Kata sandi harus memiliki minimal 8 karakter.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
