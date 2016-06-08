@extends('layouts.master')

@section('topscript')
<link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('abovecontainer')
<div class="container">
    <div id="filler">
        <h1>Please login</h1>

            {{ Form::open(array('action' =>('HomeController@doLogin'), 'method' => 'POST')) }}

            <div class="row">
                <div class="col-md-4  col-md-offset-4">
                    {{ Form::label('email', 'Email', array('class' => 'sr-only')) }}
                    {{ Form::text('email',  null,  array('class' =>'form-control', 'placeholder'=> 'Email','id'=>'email-field')) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4  col-md-offset-4">
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

