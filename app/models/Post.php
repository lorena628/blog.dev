<?php

class Post extends Eloquent
{
    protected $table = "posts";


    public static $rules = array(
        'title'      => 'required|max:100',
        'content'       => 'required|max:100000',
        'description'  => 'required|max:100',
        'category' => 'required|max:100'
    );

}
