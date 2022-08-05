<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
{
    use HasFactory;
protected $fillable=['descriptions'];

    public function totalPoints(){
        return $this->hasMany(TotalPoint::class);
    }
}
