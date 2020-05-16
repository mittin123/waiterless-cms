<?php

namespace App\Http\Controllers;

use DB;
use App\Categories;
use App\Http\Requests;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryEditRequest;
use App\Http\Requests\CategoryAddRequest;

class CategoryController extends Controller
{
    public function category()
    {
        $data = DB::table('Categories')->get();
        return view('menu.category',compact('data'));
    }
    
    public function edit($id)
    {
        $data = DB::table('Categories')->where('category_id',$id)->first();
        $category_list = DB::table('Categories')->where('parent_id',0)->get();
        return view('menu.category_edit',compact('data'),compact('category_list'));
    }

    public function Add()
    {
        $category_list = DB::table('Categories')->where('parent_id',0)->get();
        return view('menu.category_add',compact('category_list'));
    }

    public function postAdd(CategoryAddRequest $request){
        $cat_id = DB::table('Categories')->max('id')+ 1;
        $category = new Categories;
        $category->category_id = $cat_id;
        $category->category_name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('menu.category');
    }
    public function postEdit($id, CategoryEditRequest $request){
        DB::table('Categories')->where('category_id',$id)->update([
            'category_name' => $request->name,
            'parent_id' => $request->parent_cat,
            'status' => $request->status,
        ]);
        return redirect()->route('menu.category')->with(['flash_level'=>'Success','flash_message'=>'Edit success']); 
    }
    public function delete($id){
        DB::table('Categories')->where('category_id',$id)->delete();
        return redirect()->route('menu.category');
    }
}