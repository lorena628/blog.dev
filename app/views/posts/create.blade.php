@extends('layouts.master')

@section('content')

<h1>Create a blog post</h1>
    <form method="POST" action="{{{ action('PostsController@store') }}}">
            
            <p><input class="forms" type="text" name="title" placeholder="Title: " value="{{{ Input::old('title') }}}"></p>

            <p><input class="forms" type="text" name="description" placeholder="Description: " value="{{{ Input::old('description') }}}"></p>

            
                <textarea placeholder= "Content:" class="form" name= "content"id="textarea" rows="7" value="{{{ Input::old('content') }}}"></textarea>
            

            <p><input class="forms" type="text" name="category" placeholder="Category: " value="{{{ Input::old('category') }}}"></p>

            <input class="forms" id="btn_sub"  type="submit" value="Submit">
    </form>
@stop