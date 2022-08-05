<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    protected $fillable=['name', 'questions_id', 'points_id'];


    public function question(){
        return $this->belongsTo(Questions::class);
    }
    public function point(){
        return $this->belongsTo(Points::class);
    }
//    public function result()
//    {
//        return $this->hasMany(Results::class, 'answers_id','id' );
//    }

}
