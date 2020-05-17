<?php

require_once('../vendor/autoload.php');
require_once('config.php');
require_once('dao/CountryDao.class.php');

Flight::register('country_dao','CountryDao');

    Flight::route('/', function(){
        
            echo 'hello world!';
    });

    Flight::route('POST /countries', function(){
        
            Flight::json(Flight::country_dao()->add(Flight::request()->data->getData()));
    });

    Flight::route('GET /countries', function(){

        Flight::json(Flight::country_dao()->get_all());
        //allows you to tranform variable in php to json text
        //header("Content-Type: application/json; charset=UTF-8");
        //echo json_encode($countries);
    });


    Flight::start();


?>