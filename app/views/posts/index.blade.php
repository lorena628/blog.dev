@extends('layouts.master')

@section('topscript')
<link rel="icon" href="/img/LM.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap theme on bootswatch (darkly) -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yxFy3Tt84CcGRj9UI7RA25hoUMpUPoFzcdPtK3hBdNgEGnh9FdKgMVM+lbAZTKN2" crossorigin="anonymous">
@stop

@section('upperbody')
<style>
  {

  }
</style>
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
        <li class="active"><a href="#">All Posts<span class="sr-only">(current)</span></a></li>
        <li><a href="/posts/create">Create a post</a></li>
       <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/posts/create">Create a post</a></li>
            <li><a href="#">Edit a post</a></li>
            <li><a href="#">Delete a post</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>-->
      </ul> 
     <!--  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->

    
      <!-- this needs work -->


      @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
          </ul>
        @else 
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action('HomeController@showLoginForm') }}">Login</a></li>
          </ul>
      @endif  
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" action="{{{ action('PostsController@index') }}}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> 
    </div>
  </div>
</nav>
@stop


@section('content')
<h1>All posts</h1>
    @foreach ($posts as $post) 
    <div class="container">
        <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
        <h5>Description: {{{ $post->description }}}</h5>
      
        <p><small>Posted on:
          {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}
          </small>
        </p>

        <!-- <p> Written on: {{{ $post->created_at }}}</p> -->
    </div>
    @endforeach
    <p>{{ $posts->links() }}</p>

@stop