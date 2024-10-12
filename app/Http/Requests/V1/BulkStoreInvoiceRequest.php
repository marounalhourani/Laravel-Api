<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BuldStoreInvoiceRequest extends FormRequest
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
            '*.customerId'=>['required','integer'],
            '*.amount'=>['required', 'numeric'],
            '*.status'=>['required', Rule::in(['P','p','B','b','V','v'])],
            '*.billedDate'=>['required','date_format:Y-m-d H:i:s'],
            '*.paidDate'=>['nullable', 'date_format:Y-m-d H:i:s'],
        ];
    }

    protected function prepareForValidation()
    {
        if($this->postalCode){
            $this->merge([
                'postal_code'=>$this->postalCode
            ]);
        }
    }
}
