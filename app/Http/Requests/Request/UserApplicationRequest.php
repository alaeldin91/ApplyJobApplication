<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserApplicationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    
    public function rules(): array
    {
        return [
           
            'jobTitle'=>'required',
           
            'company'=>'required|string',
             
            'dateStart'=>'required|string',
           
            'industryId'=>'required',
           
            'higestLevel'=>'required|string',
           
            'school'=>'required|string|max:250',
           
            'dateComplated'=>'required',
           
            'nameSkills'=>'required'
        ];
    }
}
