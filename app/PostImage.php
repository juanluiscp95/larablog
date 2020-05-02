<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PostImage extends Model
{
    protected $fillable = ['post_id','image'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function getImageUrl(){
        return Storage::url($this->image);
    }
}
