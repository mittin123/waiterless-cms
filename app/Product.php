<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    public function find($id){
        $product = DB::select('select A.*, B.category_name from Products as A join Categories as B on A.category = B.category_id where A.id = ?', [$id]);
        return $product;
    }
}
