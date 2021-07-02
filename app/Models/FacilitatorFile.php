<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitatorFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey ='id';

    public function facilitator(){
        return $this->belongsTo("App\Models\Facilitator","id");
    }
}
