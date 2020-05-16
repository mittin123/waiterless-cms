<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashiers extends Model {

	protected $table = 'Cashiers';

	protected $fillable = ['username','name', 'password', 'last_login'];

 	public $timestamps = false;
}