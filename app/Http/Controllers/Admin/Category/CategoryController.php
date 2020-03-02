<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Str;
use Carbon\Carbon;
use Image;
use File;

class CategoryController extends Controller
{
    public function showCategoryForm() 
    {
        return view('admin.category.new_category');
    }

    public function addCategory(Request $request) 
    {
        $request->validate([
            'cate_name' => 'required',
            'slug' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240|dimensions:max-width=200,height=200',
            'rules' => 'required',
        ]);

        $image = $request->file('file');
        $file   = time().'.'.$image->getClientOriginalExtension();

        if(!File::exists(public_path()."/assets"))
            File::makeDirectory(public_path()."/assets");

        if(!File::exists(public_path()."/assets/category"))
            File::makeDirectory(public_path()."/assets/category");
         
        $destinationPath = public_path('/assets/category');
        $img = Image::make($image->getRealPath());
        $img->save($destinationPath.'/'.$file);

        DB::table('category')
            ->insert([ 
                'category' => $request->input('cate_name'),
                'slug' => strtolower(Str::slug($request->input('slug'), '-')),
                'image' => $file,
                'rules' => $request->rules,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);

        return redirect()->back()->with('msg', 'Category has been added successfully');
    }

    public function categoryList() 
    {
        $category_list = DB::table('category')->get();

        return view('admin.category.category_list', ['category_list' => $category_list]);
    }

    public function changeCategoryStatus($category_id, $status)
    {
    	DB::table('category')
            ->where('id', $category_id)
            ->update([ 
                'status' => $status,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);

        return redirect()->back();
    }

    public function showEditCategoryForm($category_id) 
    {
        $category_record = DB::table('category')
        	->where('id', $category_id)
        	->first();

        return view('admin.category.edit_category', ['category_record' => $category_record]);
    }

    public function updateCategory(Request $request, $category_id) 
    {
        $request->validate([
            'cate_name' => 'required',
            'slug' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240|dimensions:max-width=200,height=200',
            'rules' => 'required',
        ]);

        $category_file = DB::table('category')
            ->where('id', $category_id)
            ->first();

        DB::table('category')
            ->where('id', $category_id)
            ->update([ 
                'category' => $request->input('cate_name'),
                'slug' => strtolower(Str::slug($request->input('slug'), '-')),
                'rules' => $request->rules,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);

        if ($request->hasFile('file')) {

            File::delete(public_path()."/assets/category/".$category_file->image);

            $image = $request->file('file');
            $file   = time().'.'.$image->getClientOriginalExtension();

            if(!File::exists(public_path()."/assets"))
                File::makeDirectory(public_path()."/assets");

            if(!File::exists(public_path()."/assets/category"))
                File::makeDirectory(public_path()."/assets/category");
             
            $destinationPath = public_path('/assets/category');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

            DB::table('category')
                ->where('id', $category_id)
                ->update([ 
                    'image' => $file,
                ]);
        }

        return redirect()->back()->with('msg', 'Category has been updated successfully');
    }
}
