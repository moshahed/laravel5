@extends('registration/register_master_page')


@section('content')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'register-investigation','id'=>'foo', 'role' => 'form', 'data-toggle' => 'form-ajax', 'data-url' => 'No']) !!}

                @include('registration/investigation_registration/_form_investigation',['submit_button' => 'Submit'])

            {!! Form::close() !!}
        </div>

            <!--Design End-->
    </div>

    <div id="ajax_loader"></div>

@stop