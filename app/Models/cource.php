<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cource extends Model
{
    use HasFactory;
    protected $table = 'cources';
    protected $primaryKey = 'id';
    protected $fillable = [  'name' ,'title', 'image' ,'description' , 'times' ];
}
