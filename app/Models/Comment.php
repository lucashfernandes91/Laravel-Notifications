<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'user_id', 'title', 'body'];

    public function post()
    {
    	return $this->hasMany(Post::class);
    }

    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
