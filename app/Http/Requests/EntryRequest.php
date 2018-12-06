<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
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
            'name' => 'nullable|max:255',
            'content' => 'required|max:1000',
        ];
    }


    public function attributes()
    {
        return [
            'name' => '投稿者名',
            'content' => '投稿内容',
        ];
    }
}
