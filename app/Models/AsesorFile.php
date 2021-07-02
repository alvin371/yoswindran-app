<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesorFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey ='id';

    public function asesor(){
        return $this->belongsTo("App\Models\Asesor","id");
    }
}
