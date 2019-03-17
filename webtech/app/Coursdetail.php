<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coursdetail extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_name', 'course_fee', 'course_duration','course_details',
    ];

}
