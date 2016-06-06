<?php

class Post extends BaseModel
{
    protected $table = "posts";


    public static $rules = array(
        'title'      => 'required|max:100',
        'content'       => 'required|max:10000000',
        'description'  => 'required|max:100',
        'category' => 'required|max:100'
    );

    public function user() //each post belongs to a single user
    {
        return $this->belongsTo('User');
    }
}
