<?php

namespace App\Http\Controllers;

use DB;
use App\Customers;
use App\Http\Requests;

use Illuminate\Http\Request;

use App\Http\Requests\CustomerAddRequest;
class CustomerController extends Controller
{
    public function customer()
    {
        $data = DB::table('Customers')->get();
        return view('customer.client',compact('data'));
    }

    public function add(){
        return view('customer.client_add');
    }

    public function postAdd(CustomerAddRequest $request){
        $customer = new Customers;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->vip_level = 0;
        $customer->total_payment = 0;
        $customer->last_login = time();
        $customer->password = $request->phone;
        $customer->save();
        return redirect()->route('customer.client');
    }
}
?>