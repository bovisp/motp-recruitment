<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseTwoTableRequest extends FormRequest
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
   * @return array
   */
  public function rules()
  {
    return [
      'naptt15' => 'required',
      'naptt18' => 'required',
      'naptt21' => 'required',
      'naptt00' => 'required',
      'naptt03' => 'required',
      'naptt06' => 'required',
      'napat15' => 'required',
      'napat18' => 'required',
      'napat21' => 'required',
      'napat00' => 'required',
      'napat03' => 'required',
      'napat06' => 'required',
      'dfptt15' => 'required',
      'dfptt18' => 'required',
      'dfptt21' => 'required',
      'dfptt00' => 'required',
      'dfptt03' => 'required',
      'dfptt06' => 'required',
      'dfpat15' => 'required',
      'dfpat18' => 'required',
      'dfpat21' => 'required',
      'dfpat00' => 'required',
      'dfpat03' => 'required',
      'dfpat06' => 'required',
    ];
  }

  public function messages()
  {
    return [
      'required' => __('motpvalidations.qpf-table.required')
    ];
  }
}
