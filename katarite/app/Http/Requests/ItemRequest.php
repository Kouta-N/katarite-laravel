<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;

class ItemRequest extends FormRequest
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
            'title' => 'required | max:40',
            'image_path' => 'image | nullable',
            'body' => 'required | max:500',
            'price' => 'required | max:7'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'image' => '画像',
            'body' => '本文',
            'price' => '価格',
        ];
    }
}