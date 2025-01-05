<?php

namespace App\Controllers;

use App\Models\Material;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class MaterialController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new Material();
        $data = $model->findAll();

        $response = [
            'statusCode' => 200,
            'message' => 'Success',
            'result' => $data
        ];

        return $this->respond($response);
    }
}