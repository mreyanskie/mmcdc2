@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.patient.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.patients.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                <label for="first_name">{{ trans('cruds.patient.fields.first_name') }}*</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($patient) ? $patient->first_name : '') }}" required>
                @if($errors->has('first_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.patient.fields.first_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                <label for="last_name">{{ trans('cruds.patient.fields.last_name') }}*</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($patient) ? $patient->last_name : '') }}" required>
                @if($errors->has('last_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.patient.fields.last_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                <label for="contact">{{ trans('cruds.patient.fields.contact') }}</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ old('contact', isset($patient) ? $patient->contact : '') }}">
                @if($errors->has('contact'))
                    <em class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.patient.fields.contact_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.patient.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($patient) ? $patient->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.patient.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                <label for="gender">{{ trans('cruds.patient.fields.gender') }}*</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="" disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Patient::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', null) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('diagnosis') ? 'has-error' : '' }}">
                <label for="diagnosis">{{ trans('cruds.patient.fields.diagnosis') }}</label>
                <textarea id="diagnosis" name="diagnosis" class="form-control ">{{ old('diagnosis', isset($patient) ? $patient->diagnosis : '') }}</textarea>
                @if($errors->has('diagnosis'))
                    <em class="invalid-feedback">
                        {{ $errors->first('diagnosis') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.patient.fields.diagnosis_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection