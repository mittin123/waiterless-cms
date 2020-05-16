<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CashierEditRequest extends Request{
    public function authorize()
	{
		return true;
    }
    
    public function rules()
	{
        return [
          'name' => 'required',
          'username' => 'required',
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