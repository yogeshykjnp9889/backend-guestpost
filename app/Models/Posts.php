<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'cate_id',
        'user_id',
        'name',
        'slug',
        'meta_title',
        'meta_desc',
        'image_alt',
        'short_desc',
        'long_desc',
        'post_image',
    ];
}
