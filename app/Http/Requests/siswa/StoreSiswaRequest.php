<?php

namespace App\Http\Requests\siswa;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
            'nis' => 'required|unique:siswas|digits:8',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|unique:siswas|email',
            'first_name' => 'required',
            'last_name' => 'nullable',
            'mobile' => 'required|min:10|max:13|unique:siswas',
            'avatar' => 'image|file|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute harus di isi.',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus valid',
            'nis.digits' => ':attribute harus :digits angka',
            'mobile.min' => ':attribute minimal :min angka',
            'mobile.max' => ':attribute minimal :max angka',
            'avatar.max' => ':attribute minimal 5mb',
            'avatar.image' => ':attribute harus berbentuk gambar',
        ];
    }
    public function attributes(): array
    {
        return [
            'nis' => 'nis',
            'jurusan' => 'jurusan',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'email' => 'email',
            'first_name' => 'nama depan',
            'last_name' => 'nama belakang',
            'mobile' => 'nomor telepon',
            'avatar' => 'foto profil',
        ];
    }
}
