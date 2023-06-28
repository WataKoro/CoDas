<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index()
    {
        $session = session();
        return view('payment');
    }
}
