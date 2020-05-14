<?php

namespace App\Http\Controllers;


class DishesController extends Controller
{
    public function dishes()
    {
        return view('menu.dishes');
    }
    public function add()
    {
        return view('menu.dishes_add');
    }
    public function edit()
    {
        return view('menu.dishes_edit');
    }
    public function detail()
    {
        return view('menu.detail');
    }
}