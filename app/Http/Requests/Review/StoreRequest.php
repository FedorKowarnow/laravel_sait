<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        

        return [
            'title'=>'string',
            'content'=>'string',
            //'image'=>'string',
            'category_id'=>'',

            'image'=>['required:jpg,jpeg,png','mimes:jpg,jpeg,png','max:20480'],
            
        ];
    }
}
