<?php

namespace App\Http\Controllers;


class CategoryController extends Controller
{
    public function category()
    {
        return view('menu.category');
    }
    public function edit()
    {
        return view('menu.category_edit');
    }
    public function add()
    {
        return view('menu.category_add');
    }
}