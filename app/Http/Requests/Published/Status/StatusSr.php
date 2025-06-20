<?php

namespace App\Http\Requests\Published\Status;

use Illuminate\Foundation\Http\FormRequest;

class StatusSr extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'ss' => [
        'required',
        'numeric'
      ],

      'name' => [
        'required',
        'min:4',
        'max:50',
        'unique:statuses,name'
      ],

      'slug' => [
        'required',
        'min:4',
        'max:50',
        'unique:statuses,slug'
      ],

      'bg' => [
        'required'
      ],

      'text' => [
        'required'
      ],

      'description' => [
        'required'
      ],
    ];
  }

  public function messages()
  {
    return [
      'ss.required' => 'Status..sorting! harus di isi',
      'ss.numeric' => 'Status..sorting! harus angka',

      'name.required' => 'Status..name! harus di isi',
      'name.min' => 'Status..name! minimal 4 karakter',
      'name.max' => 'Status..name! maksimal 50 karakter',
      'name.unique' => 'Status..name! sudah terdaptar',

      'slug.required' => 'Status..slug! harus di isi',
      'slug.min' => 'Status..slug! minimal 4 karakter',
      'slug.max' => 'Status..slug! maksimal 50 karakter',
      'slug.unique' => 'Status..slug! sudah terdaptar',

      'bg.required' => 'Status..background! harus di isi',

      'text.required' => 'Status..text color! harus di isi',

      'description.required' => 'Status..description! harus di isi',
    ];
  }
}
