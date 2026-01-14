<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComplaintRequest extends FormRequest
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
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul aduan wajib diisi.',
            'description.required' => 'Isi aduan wajib diisi.',
            'category.required' => 'Kategori aduan wajib dipilih.',
            'location.required' => 'Lokasi kejadian wajib diisi.',
        ];
    }
}
