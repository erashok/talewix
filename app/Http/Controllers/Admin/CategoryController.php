<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
         $category = category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();
        $category = new category;
        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];
        if ($request->hasfile('cat_image')) {
            $file = $request->file('cat_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload/category/', $filename);
            $category->cat_image = $filename;
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->navbar_status = $request->navbar_status == true ? '1':'0';
        $category->navbar_footer = $request->navbar_footer == true ? '1':'0';
        $category->navbar_sidebar = $request->navbar_sidebar == true ? '1':'0';
        $category->status = $request->status == true ? '1':'0';
        $category->created_by = Auth::user()->id;

        $category->save();
        return redirect('admin/category')->with('message', 'category added successfully');
    }

    public function edit($category_id){
        $category = category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category_id){

        $data = $request->validated();
        $category = category::find($category_id);
        $category->name = $data['name'];
        $category->slug = Str::slug($data['slug']);
        $category->description = $data['description'];
        if ($request->hasfile('cat_image')) {

            $destination = 'update/category/'.$category->cat_image;
            if (File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('cat_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload/category/', $filename);
            $category->cat_image = $filename;
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];
        $category->navbar_status = $request->navbar_status == true ? '1':'0';
        $category->navbar_footer = $request->navbar_footer == true ? '1':'0';
        $category->navbar_sidebar = $request->navbar_sidebar == true ? '1':'0';
        $category->status = $request->status == true ? '1':'0';
        $category->created_by = Auth::user()->id;

        $category->update();
        return redirect('admin/category')->with('message', 'category updated successfully');

    }

    public function destroy(Request $request){
        $category = category::find($request->category_delete_id);
        if($category){
             $destination = 'upload/category/'.$category->cat_image;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $category->posts()->delete();
            $category->delete();
            return redirect('admin/category')->with('message'.'Category deleted with Posts successfully');
        }else{
            return redirect('admin/category')->with('message'.'No Found Record');
        }
    }
}
