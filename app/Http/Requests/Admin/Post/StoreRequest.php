<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',

        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'Це поле необхідно заповнити',
            'title.string'=> 'Дані повинні відповідати рядковому типу',
            'content.required'=> 'Це поле необхідно заповнити',
            'content.string'=> 'Дані повинні відповідати рядковому типу',
            'preview_image.required'=> 'Це поле необхідно заповнити',
            'preview_image.file'=> 'Необхідно вибрати файл',
            'main_image.required'=> 'Це поле необхідно заповнити',
            'main_image.file'=> 'Необхідно вибрати файл',
            'category_id.required'=> 'Це поле необхідно заповнити',
            'category_id.integer'=> 'ID категорії повинно бути числовим',
            'category_id.exists'=> 'ID категорії повинно бути в базі данних',
        ];

    }
}
