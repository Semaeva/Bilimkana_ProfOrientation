<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

class TotalPoint extends Model
{
    use HasFactory;
    protected $table='total_points';
    protected $fillable=['totalSum', 'descriptions_id','students_id'];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function descriptions()
    {
        return $this->belongsTo(Descriptions::class);
    }
}
