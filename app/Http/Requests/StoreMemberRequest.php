<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama'          => ['required', 'string', 'max:255'],
            'nim'           => ['required', 'string', 'max:50', 'unique:members,nim'],
            'email'         => ['required', 'email', 'max:255', 'unique:members,email'],
            'nomor_telepon' => ['required', 'string', 'max:20'],
            'alamat'        => ['required', 'string'],
            'status'        => ['required', Rule::in(['aktif', 'nonaktif'])],
        ];
    }
}
