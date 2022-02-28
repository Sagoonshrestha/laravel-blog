<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
        
        return view('blog.index')->with('posts',Post::orderBy('updated_at','Desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName=uniqid().'-'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path('image'),$newImageName);
        $slug = SlugService::createSlug(Post::class, 'slug',$request->title);
        POST::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug,
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog')->with('message','Your post has been added');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')->with('post', POST::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post',POST::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            ]);
        POST::where('slug',$slug)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>SlugService::createSlug(Post::class, 'slug',$request->title),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog')->with('message','Your post have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post=POST::where('slug', $slug);
        $post->delete();
        return redirect('/blog')->with('message','Your post has been deleted');
    }
}
