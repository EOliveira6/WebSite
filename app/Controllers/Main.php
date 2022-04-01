<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
        echo view ('home');
    }
}
