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
            'date'=>'required',
            'time'=>'required',
            'type'=>'required',
            'description' => 'required',
            'radio' => 'nullable',
            'phone' => 'nullable',
            'district' => 'nullable',
            'city' => 'required_without:addressmap',
            'street' => 'required_without:addressmap',
            'building' => 'required_without:addressmap',
            'addressmap' => 'required_without:city,street,building',
            'notes' => 'nullable',
            'cityarea' => 'nullable',
            'works' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg',
        ];
    }
}
