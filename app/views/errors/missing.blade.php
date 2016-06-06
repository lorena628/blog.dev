@extends('layouts.master')

@section('upperbody')
<style>

        body {
            /*color: white;*/
            text-align: center;
            background-color: black;
        }
        h1 {
            font-size: 15em;
            color: white;
            text-align: center;
        }
        h2 {
            font-size: 3em;
            color: white;
            text-align: center;
            margin-bottom: 8em;
        }
 
</style>
@stop


@section('content')
<h1>404<h1>
<h2>Not Found.</h2>


<a href="/posts">Take me home</a>
@stop

