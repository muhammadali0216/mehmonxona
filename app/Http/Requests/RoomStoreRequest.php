<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomStoreRequest extends FormRequest
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
            
            'titleUz'=>'required',
            'bodyUz'=>'required',
            'titleEn'=>'required',
            'bodyEn'=>'required',
            'titleRu'=>'required',
            'bodyRu'=>'required',
            'photos'=>'required',
            'price'=>'required',
            'number'=>'required|unique:rooms',
          
        ];
    }
}
