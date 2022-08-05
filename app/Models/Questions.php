<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function answers() {
        return $this->hasMany(Answers::class );
    }
    public function student(){
        return$this->belongsTo(Students::class);
    }
//    public function result()
//    {
//        return $this->hasMany(Results::class, 'questions_id','id' );
//    }

}
