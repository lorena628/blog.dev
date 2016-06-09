@extends('layouts.master')

@section('topscript')
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yxFy3Tt84CcGRj9UI7RA25hoUMpUPoFzcdPtK3hBdNgEGnh9FdKgMVM+lbAZTKN2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/showpost.css">
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
        <!-- <li class="active"><a href="">You are reading: {{{ $post->title }}}<span class="sr-only">(current)</span></a></li> -->
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="create">Create a post</a></li>
            @if(Auth::id()==$post->user_id)
            <li><a href="{{ action('PostsController@edit', $post->id)}}">Edit post</a></li>
            @endif
         
          </ul>
        </li>
      </ul>
     <!--  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
          </ul>
        @else 
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action('HomeController@showLoginForm') }}">Login</a></li>
          </ul>
      @endif
    </div>
  </div>
</nav>
@stop
<!-- ______________________________________________________________________________________ -->


@section('body')
<section class="container">

        <div id="title">
            <h1>{{{ $post->title }}}</h1>
        </div>
        <div id="content">
            <h3>{{{ $post->content }}}</h4>
        </div>
       
        <p>Written by : {{{ $post->user->email }}}</p>
        <p> Written on: {{{ $post->created_at }}}</p>

        <div id="dbutton">
        @if(Auth::id()==$post->user_id)
            @if(Auth::check())
              <button id="delete-post-btn" class="btn btn-default btn-danger">Delete post ?</button>
              {{-- This creates an empty form that points to the destroy method on the PostsController --}}
              {{-- There is nothing visible to the user here, but we can target this form with Javascript --}}
              {{ Form::open([
                  'action' => ['PostsController@destroy', $post->id],
                  'id'     => 'delete-post-form',
                  'method' => 'DELETE',
              ]) }}
              {{ Form::close() }}
                @else
            @endif
        @endif
        </div>
</section>
@stop


@section('bottomscript')
{{-- make sure we link up our javascript --}}
<script src="/js/delete-post.js"></script>
@stop

