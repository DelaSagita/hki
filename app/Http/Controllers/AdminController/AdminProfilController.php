<?php

namespace App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\Pengelola;
use Str;
use DB;
use Symfony\Contracts\Service\Attribute\Required;



class AdminProfilController extends Controller
{
    function index(){

        return view('admin.profil.index');
    }

    // function update(Request $request, $id)
    // {

    //     $request->validate([
    //         'name' => ['required'],
    //         'email' => ['required'],
    //     ]);

    //     $profile = User::findorfail($id)
    //     if ($request->has('image')) {
    //         $image = $request->image;
    //         $new_image = time().$image->getClientOriginalName();
    //         $image->move('public/uploads/', $new_image);
    //         $profile_data = [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'image' => 'public/uploads/' . $new_image,
    //         ];

    //     }
    //     else{
    //         $profile_data = [
    //             'name' => $request->name,
    //             'email' => $request->email,

    //         ];
    //     }
    //     $profile->update($profile_data);
    //     return back()->with('success','Profile anda berhasil di Update');

        // $newPassword = $request->new;

        //dd($newPassword);
    //}



}
