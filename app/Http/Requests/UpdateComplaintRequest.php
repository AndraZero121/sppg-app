<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComplaintRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:120'],
            'description' => ['required', 'string', 'max:1200'],
            'category' => ['required', 'string', 'max:80'],
            'location' => ['required', 'string', 'max:120'],
            'reporter_name' => ['nullable', 'string', 'max:120'],
            'reporter_contact' => ['nullable', 'string', 'max:80'],
            'status' => ['required', 'string', 'max:40'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul aduan wajib diisi.',
            'description.required' => 'Isi aduan wajib diisi.',
            'status.required' => 'Status aduan wajib dipilih.',
        ];
    }
}
