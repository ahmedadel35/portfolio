<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'title' => 'required|string|min:5',
            'link' => 'required|url',
            'client' => 'required|string',
            'img' => 'required|array',
            'img.*' => 'required|image|mimes:png,jpg,jpeg|max:512',
            'info' => 'required|string',
            'type' => 'required|in:laravel,spa,mobile',
            'tags' => 'required|array',
            'tags.*' => 'required|string|exists:tags,slug'
        ];
    }
}
