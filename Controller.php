<?php

class Controller
{
    const DEFAULT_TEMPLATE = 'template.php';
    public $model;
    public function __construct(){
        $this->model = new Model;
    }

    public function index(string $template = self::DEFAULT_TEMPLATE){
        $users = $this->model->all();
        include_once $template;
    }
}