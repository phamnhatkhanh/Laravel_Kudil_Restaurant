<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Blog;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'blog_id',
        'name',
        'email',
        'website',
        'content',
        'status',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
