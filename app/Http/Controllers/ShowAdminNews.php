<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\AdminPhoto;

class ShowAdminNews extends Controller
{
    public function index(){
        $news=News::all();
        //$posts=Post::all();
        // foreach($news as $new){

        //     echo $new->topic;
        // }
return view('shivJyoti.index',compact('news'));
    }
   
}
