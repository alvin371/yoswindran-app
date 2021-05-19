<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoModel extends Model
{
    use HasFactory;
    protected $table = 'highlights';
    protected $guarded = [];
}
