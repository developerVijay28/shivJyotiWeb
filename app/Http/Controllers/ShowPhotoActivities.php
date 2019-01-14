<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminPhoto;

class ShowPhotoActivities extends Controller
{
    public function index(){
        $photos=AdminPhoto::all()->where('category','Activities');
        return view('shivJyoti/schoolTour.activities',compact('photos'));
            }
}
