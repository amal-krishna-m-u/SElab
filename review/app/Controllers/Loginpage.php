<?php
//this is the controller for the login page
namespace App\Controllers;

class Loginpage extends BaseController
{
    public function index()
    {
        return view('loginpage');
    }
}