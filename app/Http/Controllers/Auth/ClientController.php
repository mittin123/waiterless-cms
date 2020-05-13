<?php

namespace App\Http\Controllers;


class ClientController extends Controller
{
    public function customer()
    {
        return view('customer.client');
    }
    public function edit()
    {
        return view('customer.edit');
    }
}