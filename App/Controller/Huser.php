<?php

namespace App\Controller;

use Base\Controller;

class Huser extends Controller
{
    public $view;

    public function indexAction()
    {
        $this->_render = false;
        $this->_jsonData = ['name' => 'Dima', 'id' => 123];
        $this->json();
    }

}