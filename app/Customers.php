<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model {

	protected $table = 'Customers';

	protected $fillable = ['email','password', 'name', 'phone','total_payment','vip_level','last_login'];

 	public $timestamps = false;
}