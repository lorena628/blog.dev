@extends('layouts.master')



@section('topscript')
<!-- bootstrap theme on bootswatch (darkly) -->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-uSbimwRPo7PKyTL6azsx1CcBce/X9Qg+wX1MAjNV1gAkSXYveZbZeMMyJghdsSol" crossorigin="anonymous">
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
      <a class="navbar-brand" href="">Blog.dev</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Posts<span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/posts/create">Create a post</a></li>
            <!-- <li><a href="#">Edit a post</a></li> -->
            <li><a href="#">Delete a post</a></li>
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
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul> -->
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
       <!--  <h4>Content: {{{ $post->content }}}</h4> -->
        <h5>Category: {{{ $post->category }}}</h5>
        <p> Written on: {{{ $post->created_at }}}</p>
    </div>
    @endforeach
    <p>{{ $posts->links() }}</p>

@stop