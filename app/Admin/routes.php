<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('lines', 'LinesController');
    $router->resource('lines_orders', 'LinesOrdersController');
    $router->resource('links', 'LinksController');
    $router->resource('websites', 'WebsitesController');
    $router->resource('selling', 'SellingController');
    $router->resource('reserve', 'ReserveController');
    $router->resource('contract', 'ContractController');//合同
    $router->resource('destination', 'DestinationController');//设置目的地



});


