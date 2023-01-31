<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Landingpage extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
}

<html>
    <head>
        <title>CodeIgniter 4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>CodeIgniter 4</h1>
                    <p class="lead">Congratulations! You have successfully installed CodeIgniter 4. For more information please visit the <a href="https://codeigniter.com/user_guide/">User Guide</a>.</p>
                </div>
            </div>
        </div>
    </body>