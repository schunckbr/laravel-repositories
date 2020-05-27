<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
        $this->segment(2);

        return [
            'name' => 'required|min:3|max:255|unique:products,name,{$id},id',
            'description' => 'required|min:3|max:100000',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
        ];
    }

    public function messages()
    {
        return [
            'name.unique' =>'Nome deve ser único!',
            'name.required' => 'Nome é obrigatório!',
            'name.min' => 'Precisa informar no minimo três caracteres',
            'description.required' => 'Informe uma descrição',
            'price.required' => 'Obrigatório informar um valor',
        ];
    }
}
