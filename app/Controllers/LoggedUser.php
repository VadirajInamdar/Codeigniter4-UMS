<?php

namespace App\Controllers;

class LoggedUser extends BaseController
{
    public function index(): string
    {
        return view('LoggedUser');
    }
}