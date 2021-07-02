<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey ='id';

    public function member(){
        return $this->belongsTo("App\Models\Member","id");
    }
}
