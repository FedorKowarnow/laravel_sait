<?php

namespace App\Http\Requests\ReviewUserComment;

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
            'content'=>'',
            'image'=>'',
            'review_id'=>'',
            'user_id'=>'',
            'reply_id'=>'',      
        ];
    }
}
