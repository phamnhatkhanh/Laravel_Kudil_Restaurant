<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comment;
use App\Models\Page;
use App\Models\Content;
use App\Models\Menu;

class Catagory extends Model
{
    use HasFactory;
    // protected $table = 'product';
    protected $fillable = [
        'id',
        'name',
        'kind',
        'image',
        'status',
        'parent_category_id',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}

