<?php

namespace app\controllers;

use app\core\libraries\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return Controller::view("welcome");
    }
}