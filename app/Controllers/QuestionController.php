<?php

namespace App\Controllers;

use App\Models\Question;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class QuestionController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new Question();
        $data = $model->findAll();

        $response = [
            'statusCode' => 200,
            'message' => 'Success',
            'result' => $data
        ];

        return $this->respond($response);
    }
}