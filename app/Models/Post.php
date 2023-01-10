<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'post_name',
        'slug',
        'post_image',
        'admin_id',
        'post_date',
        'tags',
        'description',
        'creator_name',
    ];
}
