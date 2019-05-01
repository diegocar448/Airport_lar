<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class BrandStoreUpdateFormRequest extends FormRequest
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
        //$id = Request::get('id');
        $id = Request::segment(3);        

        return [
            'name' => "required|min:3|max:100|unique:brands,name,{$id},id",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo nome é obrigatório.',
            'name.min' => 'Campo nome precisa ter mais de 3 caracteres.',
            'name.max' => 'Campo nome precisa não pode ter mais de 10 caracteres.',
            'name.unique' => 'Já existe esse nome cadastrado por favor verifique o nome digitado.',
        ];
    }
}
