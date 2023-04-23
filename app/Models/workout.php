<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workout extends Model
{
    use HasFactory;
    protected $table = 'workouts';
    protected $primaryKey = 'id';
    protected $fillable = [  'name' ,'title', 'image' ];

    public function timetables(){
        return $this->hasMany(timetable::class , 'workout_id' , 'id');
    } 
}
