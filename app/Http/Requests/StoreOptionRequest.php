<?php

namespace App\Http\Requests;

use App\Rules\FieldThreeLangs;
use App\Rules\TelRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOptionRequest extends FormRequest
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
            'unvan'=>['required','max:255',new FieldThreeLangs()],
            'email'=>'required|max:255',
            'tel'=>['required','max:255',new TelRule()],
        ];
    }

    public function attributes()
    {
        return [
            'unvan'=>'Ünvan(az***en***ru)',
            'email'=>'Email',
            'tel'=>'Telefon(görünüş***real)',
        ];
    }
}


