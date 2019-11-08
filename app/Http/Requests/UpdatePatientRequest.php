<?php

namespace App\Http\Requests;

use App\Patient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePatientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('patient_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'first_name' => [
                'required',
            ],
            'last_name'  => [
                'required',
            ],
            'email'      => [
                'required',
                'unique:patients,email,' . request()->route('patient')->id,
            ],
            'gender'     => [
                'required',
            ],
        ];
    }
}
