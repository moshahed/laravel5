@extends('registration/register_master_page')


@section('content')

    {!! Form::model($patient_info,['method' =>'PUT', 'url' => ["register-patient",$patient_info->id],'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('registration/patient_registration/_form',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop