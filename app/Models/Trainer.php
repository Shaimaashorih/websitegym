<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $primaryKey = 'id';
    protected $fillable = [  'name' ,'job', 'email' , 'phone' , 'description' , 'image' ];

}
