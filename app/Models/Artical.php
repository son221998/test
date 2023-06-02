<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'thumnail',
        'author',
        'category_id',
        'tag_id',
        'user_id',
        'type_id',
        'origin',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function replyComments()
    {
        return $this->hasMany(ReplyComment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tag()
    {
        return $this->hasMany(Tags::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    
}