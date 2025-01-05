<?php

namespace App\Models;

use CodeIgniter\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id_course';
    protected $allowedFields = [
        'id_course',
        'course_name'
    ];   
}