<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }

    public function register_admin()
    {
        return view('auth.register_admin');
    }


    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('/');
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function postuser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('home');
    }

    function forgot(){
        return view('admin.forgot');
    }

    function forgotAct(Request $request)
    {
         $credentials = $request->validate([
            'email' => ['required','email'],
        ]);
        $user = User::where('email', $request->email)->first();
        if( $user)
        {
           $users['list'] = User::where('email', $request->email)->first();
            return view('admin/updatePassword', $users);
        }
        else
        {
             return redirect('forgot')->with('danger', 'Email konfirmasi anda tidak ditemukan');
        }
    }

     function updatePassword(){
         return view('admin/updatePassword');
    }

     function updatePasswordAct(Request $request, User $user)
    {
        $oldPassword = $request->old;
        $newPassword = $request->new;

        if ($oldPassword === $newPassword) {
            $user->password = bcrypt($oldPassword);
            $user->update();
            return redirect('login')->with('success', 'Silahkan login menggunakan password baru anda');
        }
        return redirect('login')->back()->with('danger', 'Konfirmasi password baru tidak sama');
    }


}
