<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'tag'];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany(Comment::class,  'post_id');
    }
}
