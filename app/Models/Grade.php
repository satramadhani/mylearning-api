<?php

namespace App\Models;

use CodeIgniter\Model;

class Grade extends Model
{
    protected $table = 'grades';
    protected $primaryKey = 'id_grade';
    protected $allowedFields = [
        'id_grade',
        'grade',
        'id_user',
        'id_course'
    ];
}