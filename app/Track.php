<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "tb_track";

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'artist_id', 'album_id', 'time', 'file'];

    public function artist(){
    	return $this->belongsTo('App\Artist');
    }

    public function album(){
    	return $this->belongsTo('App\Album');
    }
}
