<?php

namespace App\Controller;

use App\Model\User;

use Base\Controller;

class Index extends Controller
{
    /** @var View */
    public $view;

    public function preAction()
    {
        $this->view->user = new User();
    }

    public function indexAction()
    {

        $this->view->user = new User();
        $this->view->var = 123;
    }

    public function mainAction()
    {
        echo 'main';
    }

}