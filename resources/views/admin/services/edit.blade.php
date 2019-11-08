@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.services.update", [$service->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('service_name') ? 'has-error' : '' }}">
                <label for="service_name">{{ trans('cruds.service.fields.service_name') }}*</label>
                <input type="text" id="service_name" name="service_name" class="form-control" value="{{ old('service_name', isset($service) ? $service->service_name : '') }}" required>
                @if($errors->has('service_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('service_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.service_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('cruds.service.fields.price') }}</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($service) ? $service->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.price_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection