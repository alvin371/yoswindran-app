<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPhoto extends Model
{
    use HasFactory;
    protected $table = 'blogphoto';
    protected $guarded = [];
}
