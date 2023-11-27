<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index(): string
    {
        return view('acara/index');
    }
}
