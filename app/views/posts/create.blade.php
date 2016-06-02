@extends('layouts.master')

@section('topscript')
<link rel="stylesheet" type="text/css" href="/css/createpost.css">
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<script src="https://use.fontawesome.com/f5fdf2e9f7.js"></script>
@stop

@section('content')
<h1>Create a blog post <i class="fa fa-pencil-square-o " aria-hidden="true"></i></h1>
    <form method="POST" action="{{{ action('PostsController@store') }}}">
            
            <p><input class="forms" type="text" name="title" placeholder="Title: " value="{{{ Input::old('title') }}}"></p>

            <p><input class="forms" type="text" name="description" placeholder="Description: " value="{{{ Input::old('description') }}}"></p>

            
                <textarea placeholder= "Content:" class="form" name= "content"id="textarea" rows="7">{{{ Input::old('content') }}}</textarea>
            

            <p><input class="forms" type="text" name="category" placeholder="Category: " value="{{{ Input::old('category') }}}"></p>

            <input class="forms" id="btn_sub"  type="submit" value="Submit">
    </form>
@stop