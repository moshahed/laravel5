@extends('registration/register_master_page')


@section('content')

    {!! Form::model($investigation_group_info,['method' =>'PUT', 'url' => ["register-investigation-group",$investigation_group_info->id],'id'=>'foo', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

    @include('registration/investigation_group_registration/_form_investigation_group',['submit_button' => 'Update'])

    {!! Form::close() !!}

@stop