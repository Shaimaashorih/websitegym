<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_timetable extends Model
{
    use HasFactory;
    protected $table = 'user_timetables';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id' , 'diet_id'];
}
