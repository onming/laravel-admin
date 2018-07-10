<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //例子列表
    $router->get('/admin/example', 'ExampleController@index');

//    $router->get('auth/login', 'AuthController@getLogin');
//    $router->post('auth/login', 'AuthController@postLogin');

});
