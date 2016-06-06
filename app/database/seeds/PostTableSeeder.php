<?php

class PostTableSeeder extends Seeder {
    public function run()
    {
        $post = new Post();
        $post->user_id= User::first()->id;
        $post->title= 'This is my first blog post';
        $post->description= 'first post';
        $post->content= 'This is my first blog post within the laravel framework.';
        $post->category= 'posts';
        $post->save();

        $post = new Post();
        $post->user_id= User::first()->id;
        $post->title= 'Seeders and Migrations';
        $post->description= 'this is a post about seeders';
        $post->content= 'This post is data that was created in the \'post table seeder\' to create a post for this blog. I will be able to use this data instead of creating lorem ipsum text';
        $post->category= 'seeders';
        $post->save();

        $post = new Post();
        $post->user_id= User::first()->id;
        $post->title= 'Software Development';
        $post->description= 'My interest in development';
        $post->content= 'I have had an interest in programming for quite sometime. I remember programming in my highschool computer science class at the age of 14. I loved every minute of it but didn\'t think it was possible for me to make a career out of programming. The past few months have flown by and I\'ve learned so much, more than what I have realized. It\'s an interest that is quickly becoming a passion. I hope to grow and become more familiar with several languages in the very near fututre.' ;
        $post->category= 'programmming';
        $post->save();

    }
}