@extends('registration/register_master_page')


@section('content')

    {!! Form::model($broker_info,['method' =>'PUT', 'url' => ["register-broker",$broker_info->id],'id'=>'foo', 'data-url' => 'Yes']) !!}

    @include('registration/broker_registration/_form_broker',['submit_button' => 'Update'])

    {!! Form::close() !!}
@stop