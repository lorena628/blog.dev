@extends('layouts.master')

@section('topscript')
<link rel="icon" href="/img/LM.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/css/createpost.css">
<!-- <link rel="icon" href="/img/adlister.png"> -->
<!-- bootstrap theme on bootswatch (darkly) -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yxFy3Tt84CcGRj9UI7RA25hoUMpUPoFzcdPtK3hBdNgEGnh9FdKgMVM+lbAZTKN2" crossorigin="anonymous">
 <!-- google font -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<script src="https://use.fontawesome.com/f5fdf2e9f7.js"></script>
@stop


@section('upperbody')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="/posts">All Posts<span class="sr-only"></span></a></li>
          <li><a href="{{ action('PostsController@create') }}">Create a post</a></li>
        <li class="active"><a href="">Editing: {{{ $post->title }}}<span class="sr-only"></span></a></li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
@stop

@section('content')
<h1>Edit blog post <br><i class="fa fa-pencil-square-o " aria-hidden="true"></i></h1>

{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

    <div class="form-group" id="t">     
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    {{ Form::text('title',   $post->title,  array('class' =>'form-control', 'placeholder'=> 'Title', 'value'=> "{{{ Input::old('title') }}}")) }}
    </div>

    <div class="form-group" id="des"> 
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
    {{ Form::text('description', $post->description, array('class' =>'form-control', 'placeholder'=> 'Description', 'value'=> "{{{ Input::old('description') }}}")) }}
    </div>

    <div class="form-group" id="cont">
            {{ $errors->first('content', '<span class="help-block">:message</span>') }}
    {{ Form::textarea('content', $post->content, array('class' =>'form-control', 'id'=>'content-field', 'placeholder'=> 'Content', 'value'=> "{{{ Input::old('content') }}}")) }}
    </div>
            <input class="btn btn-success" id="btn_sub"  type="submit" value="Submit">

{{ Form::close() }}
@stop