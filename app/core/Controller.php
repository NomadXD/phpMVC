<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 2/22/19
 * Time: 12:08 AM
 */

class Controller{

    public function model($model){

        require_once '../app/models/'. $model .'.php';
        return new $model;

    }

    public function view($view,$data=[]){

        require_once '../app/views/'. $view .'.php';


    }





}