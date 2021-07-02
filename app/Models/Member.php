<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function memberFile(){
        return $this->hasMany("App\Models\MemberFile","memberID");
    }
}
