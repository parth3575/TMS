<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    // protected $table = 'questions';
    protected $fillable = [
        'question', 'o1', 'o2', 'o3', 'o4', 'correct_ans', 'lang_id'
    ];
}
