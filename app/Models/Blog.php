<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Blog extends Model
{
    use HasFactory;

    //  protected $table = 'product';
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'description',
        'content',
        'slug',
        'number_view',
        'number_like',
        'image',
        'status',
    ];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function owner()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'blog_tag', 'blog_id', 'tag_id');
    }
}
