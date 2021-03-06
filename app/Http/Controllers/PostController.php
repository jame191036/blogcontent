<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Middleware\VerifyCategory;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('verifyCategory')->only(['create','store']);
    }

    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create')
        ->with('categorie',Category::all())
        ->with('tags',tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        // dd($request->all());
        $image = $request->image->store('posts');
        $post = post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
            'image'=>$image,
            'category_id'=>$request->category,
            'user_id'=>auth()->user()->id


        ]);

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        session()->flash('success','Successfully saved');
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')
        ->with('post',$post)
        ->with('categorie',Category::all())
        ->with('tags',tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,Post $post)
    {
       $data = $request->only(['title','description','content','category']);

       if($request->hasFile('image')){
           $image = $request->image->store('posts');
           $post->deleteImage();
           $data['image'] = $image;
       }
       if ($request->category) {
           $data['category_id'] = $request->category;
       }

       if ($request->tags) {
           $post->tags()->sync($request->tags);
       }
       $post->update($data);
       session()->flash('success','updata successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete(); //ลบข้อมูลในฐานข้อมูล
        $post->tags()->detach($post->post_id);
        $post->deleteImage();
        session()->flash('success','Delete successfully');
        return redirect(route('posts.index'));
    }
}
