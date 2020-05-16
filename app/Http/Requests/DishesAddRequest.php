<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class DishesAddRequest extends Request{

    public function authorize()
	  {
		    return true;
    }
    
    public function rules()
	  {
        return [
          'name' => 'required',
          'description' => 'required',
          'price' => 'required',
          'discount' => 'required',
          'cate' => 'required',
        ];
    }
    
    public function messages()
	  {
          return[
            'name' => "Name is required"
        ];
	  }
}
?>