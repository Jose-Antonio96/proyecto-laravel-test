<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   protected $fillable = [
    'title',
    'images', //the path you uploaded the image
    'mime_type',
    'description',
    'alt',
  ];
}