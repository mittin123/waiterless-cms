<?php

namespace App\Http\Controllers;

use DB;
use App\Dishes;

class DishesController extends Controller
{
    public function dishes()
    {
        $data = DB::table('Products')->join('Categories','Products.category','=','Categories.category_id')
        ->select('Products.*', 'Categories.category_name')
        ->get();
        return view('menu.dishes',compact('data'));
    }
    public function add()
    {
        return view('menu.dishes_add');
    }
    public function edit($id)
    {
        $data = DB::table('Products')->where('id',$id)->first();
        $category_list = DB::table('Categories')->get();
        return view('menu.dishes_edit',compact('data'),compact('category_list'));
    }
    public function detail()
    {
        return view('menu.detail');
    }
}