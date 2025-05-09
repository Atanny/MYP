<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artwork extends Model
{
    use HasFactory;

    protected $table = 'artworks';

    protected $fillable = [
        'number',
        'name',
        'image',
        'tags',
    ];
}