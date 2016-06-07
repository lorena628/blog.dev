@extends('layouts.master')

@section('topscript')
<link rel="stylesheet" type="text/css" href="/css/createpost.css">
<!-- <link rel="icon" href="/img/adlister.png"> -->
<!-- bootstrap theme on bootswatch (darkly) -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-uSbimwRPo7PKyTL6azsx1CcBce/X9Qg+wX1MAjNV1gAkSXYveZbZeMMyJghdsSol" crossorigin="anonymous">
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
      <a class="navbar-brand" href="/posts">Blog.dev</a><!--this needs to be looked at -->
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Create Post<span class="sr-only"></span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="create"></a></li>
            <li><a href="update">Update Post</a></li>
            <li><a href="#">Delete Post</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
     <!--  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
@stop

@section('abovecontainer')

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

@stop


@section('content')
<h1>Create a blog post <br><i class="fa fa-pencil-square-o " aria-hidden="true"></i></h1>




{{ Form::open(array('action' => 'PostsController@store')) }}


                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    {{ Form::text('title', null, array('class' =>'form-control', 'placeholder'=> 'Title', 'value'=> "{{{ Input::old('title') }}}")) }}

    
                {{ $errors->first('description', '<span class="help-block">:message</span>') }}
    {{ Form::text('description', null, array('class' =>'form-control', 'placeholder'=> 'Description', 'value'=> "{{{ Input::old('description') }}}")) }}

   
            {{ $errors->first('content', '<span class="help-block">:message</span>') }}
    {{ Form::textarea('content', null, array('class' =>'col-lg-12 control-label', 'id'=>'content-field', 'placeholder'=> 'Content', 'value'=> "{{{ Input::old('content') }}}")) }}
    
            {{ $errors->first('category', '<span class="help-block">:message</span>') }}
    {{ Form::text('category', null, array('class' =>'form-control', 'placeholder'=> 'Category', 'value'=> "{{{ Input::old('category') }}}")) }}

            <input class="btn btn-default" id="btn_sub"  type="submit" value="Submit">

{{ Form::close() }}


@stop