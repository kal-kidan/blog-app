<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'post_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function blog(){
        return $this->belongsTo(Blog::class, 'comment_id');
    }
}
