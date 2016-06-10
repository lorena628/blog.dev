<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', array(
			'except'=>array(
				'index',
				'show'
				)
			));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Input::has('q')) {
        	dd ("you have a search term");
            $searchTerm = Input::get('q');
            $posts = Post::where('title', 'like', "%{$searchTerm}%")->paginate(4);
        } else {
        	dd ("you donot havew a search term");
            $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        }

        return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$post = new Post();
	    $post->title = Input::get('title');
	    $post->user_id = Auth::id();
	    $post->description = Input::get('description');
	    $post->content  = Input::get('content');

    	$validator = Validator::make(Input::all(), Post::$rules);

	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Could not save post');
			$value = Session::get('errorMessage');
	  		return Redirect::back()->withInput()->withErrors($validator);
	    } else if($post->save()) {
	    	// return Redirect::action('PostsController@show', $post->id);
	     	Session::flash('successMessage', 'Post has been saved');
			$value = Session::get('successMessage');
			Log::info('this is some useful information you should be seeing ');
			return Redirect::action('PostsController@show', $post->id);
		}
	    // set flash data
		// retrieve flash data (same as any other session variable)
	  

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		try {
			$post = Post::findOrFail($id);
			return View::make('posts.show')->with('post', $post);
		} catch(Exception $e) {
			App::abort(404);
		}
		// return 'showing all posts for this user';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// dd(Input::all());	
		$post = Post::find($id);
	    $post->title = Input::get('title');
	   	$post->user_id = Auth::id();
	    $post->description = Input::get('description');
	    $post->content  = Input::get('content');

    	$validator = Validator::make(Input::all(), Post::$rules);

	    if ($validator->fails()) {
	    	// dd('failed');
	  		return Redirect::back()->withInput()->withErrors($validator);
	    } else if($post->save()) {
	    	// dd('success');
	    	return Redirect::action('PostsController@show', $post->id);
	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostsController@index', $post->id);
	}


}
