<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
	/**
	 * You must be authorized to access these methods
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show titles all Posts
	 * @return Blog posts
	 */
    public function index()
    {
    	$posts = Post::latest('published_at')->get();
    	
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Create an new Post
     * @return Response
     */
    public function create()
    {
    	return view('admin.post.create');
    }

    /**
     * Store the post in the database
     * @param  PostRequest $request
     * @return Response
     */
    public function store(PostRequest $request)
    {
    	Auth::user()->post()->create($request->all());

        // redirect to the Post page and throw a flashmessage to the $_session array
        return redirect('admin/post')->with([
            'flash_message' => 'Your post has been created'
            ]);
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Load the edit view with the data you want to edit
     * @param  $post
     * @return Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update a Post
     * @param  $post, $request
     * @return Response
     */
    public function update(Post $post, Postrequest $request)
    {
        $post->update($request->all());

        // redirect to the Post page and throw a flashmessage to the $_session array
        return redirect('admin/post')->with([
            'flash_message' => 'Your post has been Updated']);
    }

    /**
     * Delete a post
     * @param  $id
     * @return Redirect
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // redirect to the Post page and throw a flashmessage to the $_session array
        return redirect('admin/post')->with([
            'flash_message_important' => 'Your post has been deleted']);
    }
}
