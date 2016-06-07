@extends('layouts.master')
@section('body')
<h1> Please login</h1>

{{ Form::open(array('action' =>('HomeController@doLogin'), 'method' => 'POST')) }}

    {{ Form::text('email',  null,  array('class' =>'form-control', 'placeholder'=> 'Email')) }}
    {{ Form::text('password',  null,  array('class' =>'form-control', 'placeholder'=> 'Password')) }}


            <input class="btn btn-default" id="btn_sub"  type="submit" value="Submit">


{{ Form::close() }}
@stop

