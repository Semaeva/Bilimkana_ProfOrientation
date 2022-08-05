<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $fillable=['points', 'description', 'points_id','students_id','questions_id'];
    public $timestamps=false;

    public function questions()
    {
        return $this->belongsTo(Questions::class, 'questions_id');
    }
    public function points()
    {
        return $this->belongsTo(Points::class, 'points_id');
    }
    public function students()
    {
        return $this->belongsTo(Students:: class, 'students_id');
    }

}
