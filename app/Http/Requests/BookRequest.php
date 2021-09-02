<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'pages'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Coloque o título do livro!',
            'pages.numeric'  => 'Coloque um valor númerico para o campo páginas.',
        ];
    }
}