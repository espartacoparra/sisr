<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCPL extends FormRequest
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
            'title'=>'required | string ',
            'name'=>'required | string ',
            'cedula'=>'required ',
            'email'=>'required | email ',
            'phone'=>'required ',
            'description'=>'required | min:15',
            'acuerdo'=>'required | min:15',
            'terrain'=>'required | integer',
            'construction'=>'required |integer',
            'end'=>'required | date',
            'contract'=>'mimes:jpg,jpeg,gif,png,xls,xlsx,doc,docx,pdf'

        ];
    }
}
