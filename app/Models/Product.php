<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Review;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'price',
        'quantify',
        'image',
        'description',
        'content',
        'slug',
        'status',
    ];
    public function reviews()
    {
       return $this->hasMany(Review::class);
    }

}



