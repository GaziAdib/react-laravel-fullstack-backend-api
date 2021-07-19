<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/ChartData', 'ChartDataController@onAllSelect');
$router->get('/ClientReview', 'ClientReviewController@onAllSelect');
$router->post('/ContactSend', 'ContactController@onContactSend');
$router->get('/CourseHome', 'CourseController@onSelectFour');
$router->get('/CourseAll', 'CourseController@onSelectAll');
$router->post('/CourseDetails', 'CourseController@onSelectDetails');
$router->get('/Footer', 'FooterController@onSelect');
$router->get('/Information', 'InformationController@onSelect');
$router->get('/Service', 'ServiceController@onSelect');
$router->get('/Service', 'ServiceController@onSelect');

$router->get('/ProjectAll', 'ProjectController@onSelectAll');
$router->get('/ProjectThree', 'ProjectController@onSelectThree');
$router->post('/ProjectDetails', 'ProjectController@onSelectDetail');

$router->get('/VideoHome', 'HomePageController@onSelectVideo');
$router->get('/TotalProjectClient', 'HomePageController@onSelectProjectClient');
$router->get('/TechDesc', 'HomePageController@onSelectTechDesc');
$router->get('/HomeTopTitle', 'HomePageController@onSelectHomeTitle');


//Route::get('/admin/projects/index', [App\Http\Controllers\AdminProjectsController::class, 'index'])->name('admin.projects.index');
