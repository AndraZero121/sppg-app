<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSchoolRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:120'],
            'npsn' => [
                'nullable',
                'string',
                'max:20',
                Rule::unique('schools', 'npsn')->ignore($this->route('school')),
            ],
            'address' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:120'],
            'city' => ['required', 'string', 'max:120'],
            'students_count' => ['required', 'integer', 'min:0'],
            'contact_name' => ['nullable', 'string', 'max:120'],
            'contact_phone' => ['nullable', 'string', 'max:40'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama sekolah wajib diisi.',
            'npsn.unique' => 'NPSN sudah terdaftar.',
            'address.required' => 'Alamat sekolah wajib diisi.',
            'students_count.required' => 'Jumlah siswa wajib diisi.',
        ];
    }
}
