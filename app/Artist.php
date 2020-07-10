<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "tb_artist";

    protected $primaryKey = 'id';

    protected $fillable = ['name'];
}
