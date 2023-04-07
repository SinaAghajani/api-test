<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'category',
        'author',
        'content',
        'keywords',
        'caption',
        'isCommentOn',
    ];
}
