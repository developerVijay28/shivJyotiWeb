<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\AdminPhoto;

class ShowAdminNews extends Controller
{
    public function index(){
        $news=News::all();
        $photos=AdminPhoto::all()->where('id','<',10);
        // 
return view('shivJyoti.index',compact('news','photos'));
    }
   
}
