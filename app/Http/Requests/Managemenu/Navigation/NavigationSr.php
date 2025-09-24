<?php

namespace App\Http\Requests\Managemenu\Navigation;

use Illuminate\Foundation\Http\FormRequest;

class NavigationSr extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'sn' => [
        'required',
        'numeric'
      ],

      'name' => [
        'required',
        'min:3',
        'max:75',
        'unique:explores,name'
      ],

      'slug' => [
        'required',
        'min:3',
        'max:75',
        'unique:explores,slug'
      ],

      'routee' => [
        'nullable'
      ],

      'button_name' => [
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
      'sn.required' => 'Navigation..sorting!',
      'sn.numeric' => 'Navigation..sorting!',

      'name.required' => 'Navigation..name!',
      'name.min' => 'Navigation..name!',
      'name.max' => 'Navigation..name!',
      'name.unique' => 'Navigation..name!',

      'slug.required' => 'Navigation..slug!',
      'slug.min' => 'Navigation..slug!',
      'slug.max' => 'Navigation..slug!',
      'slug.unique' => 'Navigation..slug!',

      'button_name.required' => 'Navigation..button!',

      'name.' => 'Navigation..name!',
    ];
  }
}
