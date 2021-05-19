<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryModel extends Model
{
    use HasFactory;
    protected $table = 'photogall';
    protected $guarded = [];
}
