@extends('layouts.master')

@section('topscript')
<link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('content')
<h1>Please login</h1>

{{ Form::open(array('action' =>('HomeController@doLogin'), 'method' => 'POST')) }}

    {{ Form::text('email',  null,  array('class' =>'form-control', 'placeholder'=> 'Email')) }}
    {{ Form::password('password',  null,  array('class' =>'form-control', 'placeholder'=> 'Password')) }}


    <p><input class="btn btn-success" id="btn_sub"  type="submit" value="Login"></p>


{{ Form::close() }}
@stop

