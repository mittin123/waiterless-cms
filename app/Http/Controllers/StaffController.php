<?php

namespace App\Http\Controllers;

use DB;
use App\Cashiers;
use App\Http\Requests;

use Illuminate\Http\Request;

use App\Http\Requests\CashierEditRequest;
use App\Http\Requests\CashierAddRequest;
class StaffController extends Controller
{
    public function staff()
    {
        $data = DB::table('Cashiers')->get();
        return view('staff.cashier_list',compact('data'));
    }
    public function edit($id)
    {
        $data = DB::table('Cashiers')->where('id', $id)->first();
        return view('staff.edit',compact('data'));
    }
    public function postEdit($id, CashierEditRequest $request)
    {
        $data = DB::table('Cashiers')->where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username
        ]);
        return redirect()->route('staff.cashier_list');
    }

    public function add(){
        return view('staff.add');
    }

    public function delete($id){
        DB::table('Cashiers')->where('id',$id)->delete();
        return redirect()->route('staff.cashier_list');
    }

    public function postAdd(CashierAddRequest $request)
    {
        $cashier = new Cashiers;
        $cashier->name = $request->name;
        $cashier->username = $request->username;
        $cashier->password = $request->password;
        $cashier->last_login = time();
        $cashier->save();
        return redirect()->route('staff.cashier_list');
    }
}