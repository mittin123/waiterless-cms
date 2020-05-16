<?php

namespace App\Http\Controllers;

use DB;

class ClientController extends Controller
{
    public function customer()
    {
        return view('customer.client');
    }

    public function add(){
        return view('customer.client_add');
    }
}
?>