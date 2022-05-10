@extends('admin.index')

@section('title', trans('admin/vehicles.page_title') .' / '. trans('admin/vehicles.subtitle.create'))
@section('subtitle', /*'<i class="fa fa-car"></i> '*/ '<a href="'. route('admin.vehicles.index') .'">'. trans('admin/vehicles.page_title') .'</a> / '. trans('admin/vehicles.subtitle.create'))

@section('subcontent')
    @include('partials.alerts.success')
    @include('partials.alerts.errors')

    <div class="row">
        <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
            {!! Form::open(['method' => 'post', 'route' => 'admin.vehicles.store', 'files' => true, 'class' => 'form-master']) !!}
                @include('admin.vehicles.form', ['mode' => 'create'])
            {!! Form::close() !!}
        </div>
    </div>
@stop
