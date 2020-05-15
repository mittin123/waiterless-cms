<?php

namespace App\Http\Controllers;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function category()
    {
        return view('menu.category');
    }
    public function edit($id)
    {
        $data = DB::table('Categories')->where('category_id',$id)->first();
        return view('menu.category_edit',compact('data'));
    }
    public function add()
    {
        return view('menu.category_add');
    }
}