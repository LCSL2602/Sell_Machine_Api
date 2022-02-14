<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class updateRequest extends FormRequest
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
            'rut'          => "required|string|max:128" ,
            'direction'    => "required|string|max:128" ,
            'email'        => "required|string|max:128" ,
            'contact'      => "required|string|max:128" ,
            'phone_number' => "required|string|max:128" 
        ];
    }

    
     /**
        * DEvolucion de los errores correspondientes
        *
        * @return HttpResponseException
    */

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 400));
    }
}
