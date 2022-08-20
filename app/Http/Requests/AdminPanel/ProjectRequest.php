<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        return [
            'image' => 'required|string|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string:100',
//            'text' => 'some|required|text',
            'category_id' => 'required|integer',
            'url' => 'required|url|regex:'.$regex
        ];
    }
}
