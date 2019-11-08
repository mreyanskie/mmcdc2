@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
        <h1>Welcome {{auth()->user()->name}}!</h1>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection