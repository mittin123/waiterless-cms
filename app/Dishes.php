<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model {

	protected $table = 'Products';

	protected $fillable = ['name','description', 'price', 'category', 'discount', 'status', 'image'];

 	public $timestamps = false;
}