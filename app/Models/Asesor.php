<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function asesorFile(){
        return $this->hasMany("App\Models\AsesorFile","asesorID");
    }
}
