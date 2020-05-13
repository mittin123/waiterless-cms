<?php

namespace App\Http\Controllers;


class StaffController extends Controller
{
    public function staff()
    {
        return view('staff.cashier_list');
    }
    public function edit()
    {
        return view('staff.edit');
    }
    public function add()
    {
        return view('staff.add');
    }
}