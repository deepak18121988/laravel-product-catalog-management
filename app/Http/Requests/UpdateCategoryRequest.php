<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Authorize request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [

            'name' => [

                'required',

                'max:255',

                Rule::unique('categories', 'name')
                    ->ignore(
                        $this->route('id')
                    )

            ]

        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [

            'name.required' =>
                'Category name is required.',

            'name.unique' =>
                'Category name already exists.',

            'name.max' =>
                'Category name must not exceed 255 characters.'

        ];
    }
}