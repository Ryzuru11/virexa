<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * Form Request for Lead Submission
 * 
 * Validates chat widget lead form data with custom error messages
 */
class SubmitLeadRequest extends FormRequest
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
            'department' => 'required|string|in:Konsultasi Website,Tanya Paket,Info Harga,Support Proyek,Lainnya|max:100',
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => ['required', 'string', 'regex:/^(\+62|62|08)[0-9]{8,13}$/', 'max:20'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'department.required' => 'Silakan pilih departemen yang ingin Anda hubungi.',
            'department.in' => 'Departemen yang dipilih tidak valid.',
            'name.required' => 'Nama wajib diisi.',
            'name.min' => 'Nama minimal 3 karakter.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.regex' => 'Format nomor telepon tidak valid. Gunakan format Indonesia (contoh: 08123456789 atau +628123456789).',
            'phone.max' => 'Nomor telepon maksimal 20 karakter.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'department' => 'departemen',
            'name' => 'nama',
            'email' => 'email',
            'phone' => 'nomor telepon',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => 'Data yang Anda masukkan tidak valid. Silakan periksa kembali.',
                'errors' => $validator->errors(),
            ], 422)
        );
    }
}
