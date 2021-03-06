<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Blog;

class BlogController extends Controller
{
  public function create()
  {
    $blogs = Blog::all();
    return view('Admin.addBlog',compact('blogs'));
  }


  public function store(Request $request)
  {
 
    $blog= New Blog;
    $image1 = $request->file('picture');
    $destinationPath1 = 'uploads/images';
    if($image1->isValid()){
    $filename1 = time().'.'.$image1->getClientOriginalExtension();
    $image1->move($destinationPath1,$filename1);
  }
   
    $blog->picture = $filename1;

	$blog->title=$request->title;
    $blog->content=$request->content;
    $blog->adminName=$request->adminName;
    $blog->save();
    return redirect('blogList');


  }

  public function show(){
   $blogs=Blog::all();
    return view('Admin.blogList', compact('blogs'));
  }


  public function edit(Blog $blog){
   
    
    return view('Admin.editBlog', compact('blog'));
  }
  public function update(Request $request, Blog $blog){
      $image1 = $request->file('picture');
    $destinationPath1 = 'uploads/images';
    if($image1->isValid()){
    $filename1 = time().'.'.$image1->getClientOriginalExtension();
    $image1->move($destinationPath1,$filename1);
  }
   
    $blog->picture = $filename1;

	$blog->title=$request->title;
    $blog->content=$request->content;
    $blog->adminName=$request->adminName;
    $blog->save();
    return redirect('blogList');
    }

    public function destroy(Blog $blog){
      $blog->delete();
      return back();
    }
}