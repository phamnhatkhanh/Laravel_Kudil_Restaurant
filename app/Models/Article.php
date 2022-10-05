<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = [
        'id',
        'title',
        'image',
        'content',
        'country',
        'slug',
        'status',
    ];

    // public function dept_manager()
    // {
    // 	return $this->hasOne(DepartmentEmployee::class);
    // }
}
