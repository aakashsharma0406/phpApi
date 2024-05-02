<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group("api",function($routes){
    $routes->post("add-employe","DetailsController::addemploye");
    $routes->get("show-employe","DetailsController::showemploye");
    $routes->get("single-employe","DetailsController::singleemploye");
    $routes->post("update-employe","DetailsController::updateemploye");
    $routes->get("delete-employe","DetailsController::deleteemploye");
});

