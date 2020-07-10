<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    protected $table = "tb_played";

    protected $primaryKey = 'id';

    protected $fillable = ['artist_id', 'album_id', 'track_id', 'created_at'];

    public function artist(){
    	return $this->belongsTo('App\Artist');
    }

    public function album(){
    	return $this->belongsTo('App\Album');
    }

    public function track(){
    	return $this->belongsTo('App\Track');
    }
}
