<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

	protected $table = 'Categories';

	protected $fillable = ['category_id','category_name', 'parent_id', 'status'];

 	public $timestamps = false;
}