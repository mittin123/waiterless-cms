<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerAddRequest extends Request{
    public function authorize()
	{
		return true;
    }
    
    public function rules()
	{
        return [
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required'
        ];
    }
    
    public function messages()
	{
        return[
            'name' => "Name is required",
            'email' => "Email is required",
            'phone' => "Phone is required"
        ];
	}
}
?>