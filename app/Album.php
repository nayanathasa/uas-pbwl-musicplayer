<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";

    protected $primaryKey = 'id';

    protected $fillable = ['artist_id', 'name'];

    public function artist(){
    	return $this->belongsTo('App\Artist');
    }
}
