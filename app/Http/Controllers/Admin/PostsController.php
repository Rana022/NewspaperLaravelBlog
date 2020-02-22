<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.post_create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title'=>'required',
            'category'=>'required',
            'tag'=>'required',
            'about'=>'required',
            'image'=>'required',
        ]);
          $image = $request->file('image');
          $slug = str::slug($request->title);
          if($image){
              $currentDate = Carbon::now()->toDateString();
              $ext = $image->getClientOriginalExtension();
              $imageName = $slug.'_'.$currentDate.'_'.uniqid().'.'.$ext;
              if(!Storage::Disk('public')->exists('post')){
                  Storage::Disk('public')->makeDirectory('post');
              }
            $imageSize = Image::make($image)->resize(1666, 1060)->stream();
            Storage::disk('public')->put('post/' . $imageName, $imageSize);
          }else{
              $imageName = 'png.default';
          }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->about = $request->about;
        $post->image = $imageName;
        if(isset($request->status)){
            $post->status = true;
        }else{
            $post->status = false;
        }
        $post->is_approved = true;
        $post->save();
        $post->categories()->attach($request->category);
        $post->tags()->attach($request->tag);
        toastr::success('Post Successfully Created', 'success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
