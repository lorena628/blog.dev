@extends('layouts.master')

@section('topscript')
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yxFy3Tt84CcGRj9UI7RA25hoUMpUPoFzcdPtK3hBdNgEGnh9FdKgMVM+lbAZTKN2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('abovecontainer')
<!-- this is to display the error message on the screen -->
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif


<div class="container">
    <div id="filler">
        <h1>Please login</h1>

            {{ Form::open(array('action' =>('HomeController@doLogin'), 'method' => 'POST')) }}

            <div class="row">
                <div class="col-md-4  col-md-offset-4">
                        {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                    {{ Form::label('email', 'Email', array('class' => 'sr-only')) }}
                    {{ Form::text('email',  null,  array('class' =>'form-control', 'placeholder'=> 'Email','id'=>'email-field')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4  col-md-offset-4">
                        {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                    {{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
                    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password', 'id'=>'pass-field')) }}
                </div>
            </div>

                <div id="button">
                    <input class="btn btn-success" id="btn_sub"  type="submit" value="Login">
                </div>
            {{ Form::close() }}
    </div>
</div>
@stop

