<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class storeRequest extends FormRequest
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
            'name'     =>  "required|string|max:128",
            'lastname' =>  "required|string|max:128",
            'rut'      =>  "required|string|unique:users|max:30",
            'email'    =>  "required|unique:users|email|max:255",
            'password' =>  "required|string|max:48"
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
