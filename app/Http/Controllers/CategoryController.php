<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\CategoryModel;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Symfony\Contracts\Service\Attribute\Required;


class CategoryController extends Controller
{
    
    public function index()
    {
        $category = CategoryModel::paginate(10);
        return view('admin.category.index', compact('category'));
        
        
    }

   
    public function create(Request $request)
    {
        //
    }

    
    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'content' => ['required'],
            'category' => ['required'],
            'image' => ['required']
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $category = CategoryModel::create([
            'name' => $request->name,
            'category' => $request->category,
            'content' => $request->content,
            'image' => 'public/uploads/' . $new_image,
            
        ]);
        $image->move('public/uploads/', $new_image);
        return back()->with('success', 'Berhasil Ditambahkan');

    }


   
    public function show($id)
    {
        $category = CategoryModel::findorfail($id);
        return view('admin.category.show', compact('category'));
    
    }

    
    public function edit($id)
    {
        //$category = CategoryModel::findorfail($id);
        //return view('admin.category.edit', compact('category'));
    }

  
    public function update(Request $request, $id)
    {
         $request->validate([
            'name' => ['required'],
            'content' => ['required'],
            'category' => ['required']
        ]);

        $category = CategoryModel::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/', $new_image);
            $category_data = [
                'name' => $request->name,
                'category' => $request->category,
                'content' => $request->content,
                'image' => 'public/uploads/' . $new_image,
            ];
        }
        else{
            $category_data = [
                'name' => $request->name,
                'category' => $request->category,
                'content' => $request->content,
            ];
        }
        $category->update($category_data);
        return back()->with('success','Kategori anda berhasil di Update');
    }

   
    public function destroy($id)
    {
        $category = CategoryModel::findorfail($id);
        $category->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
