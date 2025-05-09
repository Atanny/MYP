<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software2 extends Model
{
    use HasFactory;

    protected $table = 'softwares2';

    protected $fillable = [
        'name',
        'icon',
        'proficiency',
    ];
}
