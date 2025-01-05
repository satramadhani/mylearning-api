<?php

namespace App\Models;

use CodeIgniter\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id_question';
    protected $allowedFields = [
        'id_question',
        'question_code',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'key_answer',
        'weight',
        'id_course'
    ];
}