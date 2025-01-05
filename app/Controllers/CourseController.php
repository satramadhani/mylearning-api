<?php

namespace App\Controllers;

use App\Models\Course;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class CourseController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new Course();
        $data = $model->findAll();

        $response = [
            'statusCode' => 200,
            'message' => 'Success',
            'result' => $data
        ];

        return $this->respond($response);
    }
}