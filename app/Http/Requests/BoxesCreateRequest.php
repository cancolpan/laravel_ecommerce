<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoxesCreateRequest extends FormRequest
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
            'name' => 'required',
            'length' => 'required|integer',
            'width' => 'required|integer',
            'height' => 'required|integer',
            'box_group_id' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Box Name',
            'length' => 'Box length',
            'width' => 'Box width',
            'height' => 'Box height',
            'box_group_id'=>'Box group'
        ];
    }

}
