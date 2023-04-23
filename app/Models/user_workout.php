<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_workout extends Model
{
    use HasFactory;
    protected $table = 'user_workouts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id' ,'workout_id', 'duration' , 'distance' , 'date' 
                             ,'starts_at' , 'finishes_at' ];
                             
}
