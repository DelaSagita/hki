<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // public function index()
    // {
    //     $user = User::paginate(10);
    //     return view('admin/user/index', compact('user'));
    // }


    // public function show($id)
    // {
    //     $user = User::findorfail($id);
    //     return view('admin/user/show', compact('user'));
    // }


    // public function update(Request $request, $id) 
    // {
    //     $request->validate([
    //         'name' => ['min:1', 'max:100', 'required'],
    //         'email' => ['min:3','alpha_num', 'numeric', 'required'],
           
        
    //     ]);

    //     if ($request->has('image')) 
    //     {
    //         $image = $request->image;
    //         $new_image = time().$image->getClientOriginalName();
    //         $image->move('public/uploads/pengajuan/', $new_image);
    //         $user_data = [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'image' => 'public/uploads/pengajuan/'.$new_image,
    //         ];
    //     }
    //     else{
    //         $user_data = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         ];
    //     }
    //     User::whereId($id)->update($user_data);
    //     return back()->with('success', ' Data Profil  Berhasil di Update');
    // }


    // public function destroy($id) 
    // {
    //     $user = User::findorfail($id);
    //     $user->delete();
    //     return redirect()->back()->with('success','User Berhasil Dihapus');
    // }


    public function index()
    {
        $user = User::paginate(10);
        return view('admin.user.index', compact('user'));
    }

    
    public function create()
    {
        return view('admin.user.create');

    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:37',
            'email' => 'required|email',
            'tipe' => 'required'
        ]);

        if($request->input('password')) {
            $password = bcrypt($request->password);
        }
        else
        {
            $password = bcrypt('1234');
        }
       
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'tipe' => $request->tipe,
            'password' => $password
            ]);

        return redirect()->back()->with('success','User Berhasil Ditambah');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:37',
            'tipe' => 'required'
        ]);

        if($request->input('password')) {
            $user_data = [
            'name' => $request->name,
            'tipe' => $request->tipe,
            'password' => bcrypt($request->password)
            ];            
        }
        else{
            $user_data = [
            'name' => $request->name,
            'tipe' => $request->tipe,
            ];
        }

        $user = User::find($id);
        $user->update($user_data);

        return redirect()->route('user.index')->with('success','Berhasil Diupdate');

    }

   
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success','Berhasil Dihapus');
    }
}
