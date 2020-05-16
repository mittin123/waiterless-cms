<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryAddRequest extends Request{
    public function authorize()
	{
		return true;
    }
    
    public function rules()
	{
        return [
          'name' => 'required',
          'parent_id' => 'required',
          'status' => 'required',
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