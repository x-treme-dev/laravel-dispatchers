<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTapWaterTicketRequest extends FormRequest
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
            'filial_id' => 'nullable',
            'date'=>'required',
            'time'=>'required',
            'type'=>'required',
            'description' => 'required',
            'radio' => 'nullable',
            'phone' => 'nullable',
            'district' => 'nullable',
            'city' => 'required_without:addressmap',
            'street' => 'required_without:addressmap',
            'building' => 'nullable',
            'addressmap' => 'required_without:city,street',
            'notes' => 'nullable',
            'cityarea' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg',
        ];
    }
}
