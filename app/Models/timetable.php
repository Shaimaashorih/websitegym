<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    use HasFactory;
    protected $table = 'timetables';
    protected $primaryKey = 'id';
    protected $fillable = ['workout_id' , 'day' , 'time'];

    public function workout()
    {
        return $this->belongsTo(workout::class );
    }

}
