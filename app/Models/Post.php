<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mailables\Content;

class Post extends Model
{
    use HasFactory;
    protected $filleble = [
        'image',
        'title',
        'content',
    ];
}
