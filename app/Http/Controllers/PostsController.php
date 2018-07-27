<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(Request $request)
	{
		$category_id = $request['category_id'];
		$posts = Post::paginate(10);
		if($category_id > 0) {
			$posts = Post::where('category_id', $category_id)->paginate(10);
		} else {

		}
		$categories = Category::all();

		$tags = Tag::all();

		return view('posts.index', compact('posts', 'categories', 'tags'));
	}

    public function show(Post $post)
    {
		$categories = Category::all();
		$tags = Tag::all();

		$prev_article = Post::where('id','<', $post->id)->orderBy('id', 'desc')->first();

		if(empty($prev_article)) {
			$prev_article = Post::orderBy('id', 'desc')->first();
		}

		$next_article = Post::where('id','>', $post->id)->first();

		if(empty($next_article)) {
			$next_article = Post::orderBy('id', 'asc')->first();
		}


		return view('posts.show', compact('post', 'categories', 'tags', 'prev_article', 'next_article'));
    }

	public function create(Post $post)
	{
		return view('posts.create_and_edit', compact('post'));
	}

	public function store(PostRequest $request)
	{
		$post = Post::create($request->all());
		return redirect()->route('posts.show', $post->id)->with('message', 'Created successfully.');
	}

	public function edit(Post $post)
	{
        $this->authorize('update', $post);
		return view('posts.create_and_edit', compact('post'));
	}

	public function update(PostRequest $request, Post $post)
	{
		$this->authorize('update', $post);
		$post->update($request->all());

		return redirect()->route('posts.show', $post->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Post $post)
	{
		$this->authorize('destroy', $post);
		$post->delete();

		return redirect()->route('posts.index')->with('message', 'Deleted successfully.');
	}
}