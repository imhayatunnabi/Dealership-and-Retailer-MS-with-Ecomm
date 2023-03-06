<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'heading'=>'required|max:255',
            'description'=>'required|max:255',
            'banner_url'=>'required|max:255|url',
            'button_text'=>'required|max:255',
            'image'=>'required|image',
            'status'=>'required|numeric',
        ];
    }
}