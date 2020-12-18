<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $fillable = [
        'user', 'lang_id', 'lang_name', 'marks', 'date_time'
    ];
}
