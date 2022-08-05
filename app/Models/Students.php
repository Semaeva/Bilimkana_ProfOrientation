<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable=['name', 'students_id'];
    public $timestamps=false;

//    public function result()
//    {
//        return $this->hasMany(Results::class, 'students_id','id' );
//    }

    public function questions()
    {
        return $this->hasMany(Questions::class );
    }


}
