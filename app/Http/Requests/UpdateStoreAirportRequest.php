<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreAirportRequest extends FormRequest
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
        $id = $this->segment(5);

        return [
            'name'  =>"required|min:3|max:100|unique:airports,name,{$id},id",
            'latitude'  =>'required|integer',
            'longitude'  =>'required|integer',
            'address'  =>'required|min:3|max:100',
            'number'  =>'required|integer',
            'zip_code'  =>'required|numeric',
            'complement'  =>'max:191',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Nome é obrigatório.',
            'name.min' => 'O Nome precisa ter mais de 3 caracteres.',
            'name.max' => 'O Nome precisa ter no maximo 100 caracteres.',
            'name.unique' => 'Esse Aeroporto já existe verifique o nome digitado.',
            'latitude.required' => 'Campo Latitude é obrigatório.',
            'latitude.integer' => 'A Latitude precisa ser um número inteiro.',
            'longitude.required' => 'Campo Longitude é obrigatório.',
            'longitude.integer' => 'A Longitude precisa ser um número inteiro.',
            'address.required' => 'O Endereço é obrigatório.',
            'address.min' => 'O Endereço precisa ter no mínimo 3 caracteres.',
            'address.max' => 'O Endereço precisa ter no maximo 100 caracteres',
            'number.required' => 'O Número é obrigatório',
            'number.integer' => 'O Número precisa ser um valor inteiro',
            'zip_code.required' => 'O CEP é obrigatório',
            'zip_code.integer' => 'O CEP precisa ser um valor inteiro',
            'complement.max' => 'O Complemento precisa ter no maximo 191 caracteres',
                       
        ];
    }
}
