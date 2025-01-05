<?php

namespace App\Controllers;

use App\Models\Answer;
use App\Models\Grade;
use App\Models\Question;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class AnswerController extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new Answer();
        $data = $model->findAll();

        $response = [
            'statusCode' => 200,
            'message' => 'Success',
            'result' => $data
        ];

        return $this->respond($response);
    }

    public function create()
    {
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'answer' => $this->request->getVar('answer'),
            'id_question' => $this->request->getVar('id_question'),
            'id_grade' => $this->request->getVar('id_grade')
        ];

        $grade = new Grade();
        $grade->find($data['id_grade']);

        if (!$grade)
        {
            $question = new Question();
            $question->find($data['id_question']);

            $new_grade = [
                'id_grade' => $data['id_grade'],
                'grade' => 0,
                'id_user' => $data['id_user'],
                'id_course' => $data['id_course']
            ];

            $grade->insert($new_grade);
        }

        $data['id_grade'] = $grade->id_grade;

        $model = new Answer();
        $model->insert($data);

        $response = [
            'statusCode' => 201,
            'message' => 'Created',
            'result' => $data
        ];

        return $this->respond($response);
    }
}