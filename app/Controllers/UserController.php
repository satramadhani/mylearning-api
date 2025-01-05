<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    use ResponseTrait;

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $model = new User();
        $data = $model->where('username', $username)->first();

        if ($data)
        {
            if (password_verify($password, $data['password']))
            {
                $response = [
                    'statusCode' => 200,
                    'message' => 'Success',
                    'result' => [
                        'id_user' => $data['id_user'],
                        'username' => $data['username']
                    ]
                ];

                return $this->respond($response);
            }
        }

        $fail = [
            'statusCode' => 409,
            'message' => 'Conflict',
            'result' => [
                'error' => 409
            ]
        ];

        return $this->respond($fail);
    }

    public function register()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $model = new User();
        $data = $model->where('username', $username)->first();

        if (!$data)
        {
            $new_data = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $model->insert($new_data);
            
            $response = [
                'statusCode' => 201,
                'message' => 'Created',
                'result' => [
                    'id_user' => $model->getInsertID(),
                    'username' => $username
                ]
            ];

            return $this->respondCreated($response);
        }

        $fail = [
            'statusCode' => 409,
            'message' => 'Conflict',
            'result' => [
                'error' => 409
            ]
        ];

        return $this->respond($fail);
    }
}