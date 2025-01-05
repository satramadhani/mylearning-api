<?php

namespace App\Models;

use CodeIgniter\Model;

class Material extends Model
{
    protected $table = 'materials';
    protected $primaryKey = 'id_material';
    protected $allowedFields = [
        'id_material',
        'material_name',
        'file_url',
        'id_course'
    ];
}