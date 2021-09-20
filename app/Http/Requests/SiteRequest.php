<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
                'name'=>'required|min:1|max:50',
                'phone'=>'required|min:1|max:50'
           
        ];
    }
    public function attributes(){
        return [
            'name' => 'имя',
            'phone' => 'телефон'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Поле имя обязательно к заполнению',
            'phone.required'=>'Поле телефон обязательно к заполнению',
           
        ];
    }
 
}
