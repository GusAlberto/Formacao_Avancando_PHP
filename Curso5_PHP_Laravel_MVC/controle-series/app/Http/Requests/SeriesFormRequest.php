<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'unique:series', 'min:2', 'max:128'],
        ];
        /*
           'password' => [
                'required',
                'min:6',
                'letters',
                'mixedCase',
                'numbers',
                'symbols',
                'uncompromised',
                ]
         */
    }


   /* QUERY PARA VERIFICAR OS DADOS DO USUÁRIO NO BANCO
     'nome' => [
        'required',
        Rule::unique('aprovadores')->where(function ($query)
        use ($cadastro_idcadastro, $users_id)
        {
              return $query
                ->where('cadastro_idcadastro', $cadastro_idcadastro)
                ->where('users_id', $users_id);
        }),
    ] */

    // VALIDAÇÕES FEITAS À MÃO, PARA NÃO ALTERAR NOSSO ARQUIVO LANG

    /*  public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome é necessário ter ao menos :min caracteres',
        ];
    } */
}
