<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Relations for Comment Model
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
