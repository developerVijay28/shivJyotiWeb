<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPhoto extends Model
{
  protected $fillable=[
    'photo_id','category','header',

  ];
  public function photos(){
    return $this->belongsTo('App\Photo','photo_id');
  }
}
