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
        
        if ($_FILES['image']['type'][0]==null){
            return [
                'title'=>'string',
                'content'=>'string',
                'image'=>'file',
                'category_id'=>'',     
            ];
        } else{
            return [
                'title'=>'string',
                'content'=>'string',
                'image'=>'file',
                'category_id'=>'',
                'image'=>'required:jpg,jpeg,png','mimes:jpg,jpeg,png','max:20480',    
            ];
        }
    }
}
