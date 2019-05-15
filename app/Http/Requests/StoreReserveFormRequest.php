<?php

namespace App\Http\Requests;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;



class StoreReserveFormRequest extends FormRequest
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
            'user_id'           =>'required|exists:users,id',
            'flight_id'         =>'required|exists:flights,id',
            'date_reserved'     =>'required|date' ,          
            'status'            => [
                'required',
                Rule::in(['reserved', 'canceled', 'paid', 'concluded'])
            ],   
        ];

        
    }


    public function messages()
    {
        return [
            'user_id.required' => 'Campo Usuário é obrigatório.',
            'user_id.exists' => 'Esse Usuário já existe em nosso sistema.',
            'flight_id.required' => 'Campo de Voo é obrigatório.',
            'flight_id.exists' => 'Essa Voo já existe em nosso sistema.',
            'date_reserved.required' => 'Campo de Data é obrigatório.',
            'date_reserved.date' => 'Campo de Data precisa ser uma data.',
            'status.required' => 'Campo Status é obrigatório.',              
            'status.in' => 'O Status selecionado é invalido',              
        ];
    }
}
