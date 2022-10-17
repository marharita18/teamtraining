<?php

class Controller
{
    const DEFAULT_TEMPLATE = 'template.php';

    public function index(string $template = self::DEFAULT_TEMPLATE, array $data = []){
        extract($data);
        include_once  $template;
    }
}