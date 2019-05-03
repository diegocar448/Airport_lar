<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaneStoreUpdateFormRequest extends FormRequest
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
            'brand_id'          => 'required|exists:brands,id',
            'qty_passengers'    => 'required|integer',
            'class'             => 'required|in:economic,luxury',
        ];
    }


    public function messages()
    {
        return [
            'brand_id.required' => 'Campo marca é obrigatório.',
            'brand_id.exists' => 'Essa marca não existe, favor verificar o valor.',
            'qty_passengers.required' => 'Campo de quantidade é obrigatório.',
            'qty_passengers.integer' => 'Campo de quantidade precisa ser um numero inteiro.',
            'class.required' => 'Campo classe é obrigatório.',
            'class.in' => 'Essa classe é diferente da permitida.',
            
        ];
    }
}
