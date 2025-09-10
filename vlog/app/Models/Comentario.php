<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table ="comments";
    protected $fillable=[
        "post_id",
        "content"
    ];
}
