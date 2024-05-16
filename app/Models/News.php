<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model //PascalCase
{
    use HasFactory;
    // Define the fillable fields
    protected $fillable = ['title', 'description', 'image_url']; // Example fields
}
