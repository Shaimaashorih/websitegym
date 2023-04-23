<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_settings extends Model
{
    use HasFactory;
    protected $table = 'general_settings';
    protected $primaryKey = 'id';
    protected $fillable = ['phone2' , 'email2' , 'twitter' , 'facebook' ,'instegram' , 'logo_path'];

}
