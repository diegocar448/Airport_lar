<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreUpdateFlightFormRequest extends FormRequest
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
            'plane_id'                  => 'required|exists:planes,id',
            'airport_origin_id'         => 'required|exists:airports,id',
            'airport_destination_id'    => 'required|exists:airports,id',
            'date'                      => 'required|date|after:tomorrow',
            'time_duration'             => 'required',
            'hour_output'               => 'required',
            'arrival_time'              => 'required',            
            'old_price'                 => 'required',
            'price'                    => 'required',
            'total_plots'               => 'required|digits_between:1,12',                        
            'is_promotion'              => 'boolean',
            'image'                     => 'image',
            'qty_stops'                 => 'numeric',
            'description'               => 'min:3|max:1000',            
        ];
    }


    public function messages()
    {
        return [
            'plane_id.required' => 'Campo Avião é obrigatório.',
            'plane_id.exists' => 'Esse Avião não existe em nosso sistema.',
            'airport_origin_id.required' => 'Campo de Origem é obrigatório.',
            'airport_origin_id.exists' => 'Essa Origem não existe em nosso sistema.',
            'airport_destination_id.required' => 'Campo de Origem é obrigatório.',
            'airport_destination_id.exists' => 'Essa Origem não existe em nosso sistema.',
            'date.required' => 'O campo Data é obrigatório.',
            'date.date' => 'O campo Data precisa ser um data.',
            'date.after' => 'A data precisa ser depois de amanhã.',
            'time_duration.required' => 'Campo tempo de duração é obrigatório.',
            'hour_output.required' => 'Campo da hora de sáida é obrigatório.',
            'arrival_time.required' => 'Campo de hora de chegada é obrigatório.',
            'old_price.required' => 'Campo de preço antigo é obrigatório.',
            'price.required' => 'Campo de preço atual é obrigatório.',
            'total_plots.required' => 'Campo de Total de paradas é obrigatório.',
            'total_plots.digits' => 'Campo de Total de paradas precisa ter de 1 a 12 digitos.',
            'is_promotion.boolean' => 'Campo de Promoção precisa ser do tipo booleano.',
            'image.image' => 'Campo Image precisa ser uma imagem.',
            'qty_stops.numeric' => 'Campo Quantidade de paradas precisa ser uma valor númerico.',
            'description.min' => 'Campo Descrição precisa ter no mínimo 3 digitos.',
            'description.max' => 'Campo Descrição precisa ter no maximo 1000 digitos.',            
        ];
    }
}
