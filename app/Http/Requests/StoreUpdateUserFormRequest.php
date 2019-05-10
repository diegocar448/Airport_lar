<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
        $id = $this->segment(3);

        return [
            'name'  =>"required|min:3|max:100",
            'email'  =>"required|min:3|max:100|unique:users,name,{$id},id",
            'password'  =>'required|max:25',
            'image'  =>'image',           
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Nome é obrigatório.',
            'name.min' => 'O Nome precisa ter mais de 3 caracteres.',
            'name.max' => 'O Nome precisa ter no maximo 100 caracteres.',
            
            'email.required' => 'Campo Email é obrigatório.',
            'email.min' => 'O Email precisa ter mais de 3 caracteres.',
            'email.max' => 'O Email precisa ter no maximo 100 caracteres.',            
            'email.unique' => 'Esse Email já existe verifique o email digitado.',

            'password.required' => 'Campo Senha é obrigatório.',
            'password.max' => 'Campo Senha pode ter no maximo 25 caracteres.',
            
            'image.image' => 'Só é permitido arquivos de imagem.',
            
                       
        ];
    }
}
