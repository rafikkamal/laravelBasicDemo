<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{

    /**
     * Create a new authentication controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('created_at')->get();
        $posts = Post::orderBy('created_at')->paginate(2);
        // foreach ($posts as $key => $value) {
        //     echo $value;
        // }
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->subject = $request['subject'];
        $image = $request->file('picture');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image->move('assets/img', $image_name);
        } else {
            $image_name = 'no_image.png';
        }
        $post->image = $image_name;
        $post->save();
        Session::flash('success', 'The post has been successfully added');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return view('posts.show')->with('post', $post);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if ($post) {
            return view('posts.edit')->with('post', $post);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->subject = $request['subject'];
        $image = $request->file('picture');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image->move('assets/img', $image_name);
        } else {
            $image_name = 'no_image.png';
        }
        $post->image = $image_name;
        $post->save();
        Session::flash('success', 'The post was successfully updated.');
        //return redirect()->route('posts.show', ['id' => $id]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
