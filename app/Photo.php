<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  // protected $uploads='/rndDocs/';
  // protected $fillable=['file'];
  //
  // public function getFileAttribute($rnd_files){
  //   return $this->uploads.$rnd_files;
  protected $uploads='/schoolPhotos/';
  protected $fillable=['file'];

  public function getFileAttribute($photos){
    return $this->uploads.$photos;
  }
}
