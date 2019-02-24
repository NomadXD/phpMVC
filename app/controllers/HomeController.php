<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 2/22/19
 * Time: 12:30 AM
 */


class HomeController extends Controller{
    public function index($name=''){
        $user=$this->model('User');
        $user->name = $name;
        echo $user->name;

        $this->view('home/index',['name'=> $user->name]);
    }

    public function test(){
        echo 'home/index';
    }


}