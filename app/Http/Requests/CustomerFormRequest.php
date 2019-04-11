<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
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
            'name'     => 'required|min:3|max:50',
            'cnpj'     => 'required|numeric',
            'zip_code' => 'required|min:8|max:8',
            'address'  => 'required|min:3|max:100',
            'number'   => 'required|numeric',
            'district' => 'required|min:3|max:50',
            'city'     => 'required|min:3|max:50',
            'state'    => 'required|min:2|max:2',
            'country'  => 'required|min:3|max:50',
        ];
    }
}
