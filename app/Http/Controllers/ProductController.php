<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function add(){
        return view('product.add');
    }

    public function show($id){
        $model_product = new Product();
        $product = $model_product->find($id);
        return view('product.view', array('product'=>$product));
    }

    public function delete($id){
        return view('product.delete');
    }
}
