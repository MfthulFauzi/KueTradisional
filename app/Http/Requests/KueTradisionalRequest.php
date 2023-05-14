<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KueTradisionalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_kue' => 'string|max:50',
            'asal_daerah' => 'string|max:50',
   
        ];
    }

    public function messages()
    {
        return[
            'nama_kue.string' => 'Nama Kue harus bertipe string',
            'nama_kue.max' => 'Nama Kue maximal 50 karakter',
            'asal_daerah.string' => 'Asal Daerah harus bertipe string',
            'asal_daerah.max' => 'Asal Daerah maximal 50 karakter',
          
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Data inputan salah, Periksa inputan anda');
        }
    }
}
