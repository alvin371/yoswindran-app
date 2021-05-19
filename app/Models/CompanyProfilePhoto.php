<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfilePhoto extends Model
{
    use HasFactory;
    protected $table = 'companyphoto';
    protected $fillable = ['photo'];
}
