<?php

namespace App\Http\Requests\OrganizationType;

use Illuminate\Foundation\Http\FormRequest;

class GetOrganizationTypesRequest extends FormRequest
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
//            "limit" => "integer|required|max:100|min:0",
//            "offset" => "integer|required|min:0",
            "name" => "string"
        ];
    }
}
