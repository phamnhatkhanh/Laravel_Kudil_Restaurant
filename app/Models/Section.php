<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Section extends Model
{
    use HasFactory;

    public function pages() {
        return $this->belongsToMany(Page::class, 'page_section', 'section_id','page_id');
    }
}
