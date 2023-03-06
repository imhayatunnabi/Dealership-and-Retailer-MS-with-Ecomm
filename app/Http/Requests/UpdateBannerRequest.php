<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerRequest extends FormRequest
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
        $banner = $this->route('banner')->id;
        return [
            'name'=>'required|max:255',
            'image'=>'required|image',
            'status'=>'required|numeric',
            'slug'=>Rule::unique('banners')->ignore($banner),
        ];
    }
}