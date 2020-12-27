<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
 protected $fillable = [
     'student_name',
     'national_id',
     'student_email',
     'student_phone',
     'student_address',
     'student_image'
     ];
}
