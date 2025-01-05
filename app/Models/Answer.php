<?php

namespace App\Models;

use CodeIgniter\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $primaryKey = 'id_answer';
    protected $allowedFields = [
        'id_answer',
        'answer',
        'id_question',
        'id_grade'
    ];
}