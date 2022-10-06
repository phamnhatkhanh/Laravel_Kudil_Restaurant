<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Section;

class Page extends Model
{
    use HasFactory;

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function sections() {
        return $this->belongsToMany(Section::class, 'page_section','page_id', 'section_id');

    }
}

