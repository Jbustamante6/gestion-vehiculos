<?php

namespace App\Http\Requests\Itinerario;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class Store extends FormRequest
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
      'fecha'           => 'required',
      'hora_salida'     => 'required',
      'rutas_id'        => 'required|exists:rutas,id',
      'vehículos_id'    => 'required|exists:vehiculos,id',
      'conductores_id'    => 'required|exists:conductores,id'
    ];
  }

  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(response()->json($validator->errors(), 422));
  }
}
