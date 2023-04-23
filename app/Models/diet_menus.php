<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diet_menus extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ,'title' , 'image' , 'ingridients'
                             ,'description' , 'times' ];

}
