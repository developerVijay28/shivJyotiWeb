<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminPost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminPanel.post');
    }
    
    // for showing the acedmnic Post
    public function acedmicPost(){
     $posts=Post::all()->where('category_name','Acedamic');   
        return view('postCat.academy',compact('posts'));
    }

    //for showing the Course Post
    public function coursePost(){
        $courses=Post::all()->where('category_name','Course');
        return view('postCat.course',compact('courses'));
    }
    public function QuotePost(){
        $quotes=Post::all()->where('category_name','Quotes');
        return view('postCat.quote',compact('quotes'));
    }
    public function indexPost(){
        $allPost=Post::orderBy('id','desc')->paginate(6);
        return view('adminPanel.postShow',compact('allPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
       Post::create($input);
       return redirect('/adminPostView');
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
        $allPost=Post::findOrFail($id);
        $allPost->delete();
        return redirect('/adminPostView');
    }
}
