@extends('registration/register_master_page')


@section('content')

    {!! Form::model($doctor_info,['method' =>'PUT', 'url' => ["register-doctor",$doctor_info->id],'id'=>'foo', 'data-url' => 'No']) !!}

    @include('registration/doctor_registration/_form_doctor',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop