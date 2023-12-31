<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'domain' => 'required|min:4|max:100',
            'description' => 'nullable|min:5',
            'image' => 'nullable|url|min:5|max:100',
            'link' => 'required|url|min:2|max:200',
            'stack' => 'required|min:2|max:150',
            'date' => 'required|date'
        ];
    }
}
