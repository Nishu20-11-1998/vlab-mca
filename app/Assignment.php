<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['student_name', 'student_details', 'topic_name', 'assignment_name', 'answer', 'active'
    ];

}
