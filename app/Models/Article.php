<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title_article' ,'abotus_article', 'courses_article' , 
    'trainer_article' , 'timetable_article' , 'ourblog_article' ,'title_span' ,
     'abotus_span' , 'courses_span' , 'trainer_span' 
    , 'timetable_span' , 'ourblog_span'];

}


