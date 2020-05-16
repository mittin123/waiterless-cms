<?php

namespace App\Http\Controllers;

use DB;
use App\Dishes;
use App\Http\Requests;

use Illuminate\Http\Request;

use App\Http\Requests\DishesEditRequest;
use App\Http\Requests\DishesAddRequest;

class DishesController extends Controller
{
    public function dishes()
    {
        $data = DB::table('Products')->join('Categories','Products.category','=','Categories.category_id')
        ->select('Products.*', 'Categories.category_name')
        ->get();
        return view('menu.dishes',compact('data'));
    }

    public function Add()
    {
        $data = DB::table('Categories')->select('Categories.*')->get();
        return view('menu.dishes_add', compact('data'));
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

    public function postEdit($id, DishesEditRequest $request){
        DB::table('Products')->where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'category' => $request->cate
        ]);
        return redirect()->route('menu.dishes')->with(['flash_level'=>'Success','flash_message'=>'Edit success']); 
    }

    public function postAdd(DishesAddRequest $request){
        $dish = new Dishes;
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->discount = $request->discount;
        $dish->category = $request->cate;
        $dish->status = $request->status;
        $dish->image = "no_image.jpg";
        $dish->save();
        return redirect()->route('menu.dishes');
    }

    public function delete($id){
        DB::table('Products')->where('id',$id)->delete();
        return redirect()->route('menu.dishes');
    }
}