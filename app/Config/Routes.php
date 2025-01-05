<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('/login', 'UserController::login');
$routes->post('/user/register', 'UserController::register');

$routes->get('/answer', 'AnswerController::index');
$routes->post('/answer', 'AnswerController::create');

$routes->get('/course', 'CourseController::index');

$routes->get('/question', 'QuestionController::index');

$routes->get('/material', 'MaterialController::index');