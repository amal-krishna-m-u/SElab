<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard - Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .header {
            background-color: #2E2E2E;
            color: #fff;
            padding: 10px;
        }
        
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        
        .btn {
            display: inline-block;
            background-color: #0077CC;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        
        .btn:hover {
            background-color: #005EA7;
        }
        
        .btn-secondary {
            background-color: #fff;
            color: #0077CC;
            border: 2px solid #0077CC;
        }
        
        .btn-secondary:hover {
            background-color: #0077CC;
            color: #fff;
        }
        
        .btn-container {
            margin-top: 20px;
        }
        
        .heading {
            font-size: 30px;
            margin-bottom: 20px;
        }
        
        .subheading {
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .link {
            color: #0077CC;
        }
        
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Review Management System </h1>
        </div>
    </div>
    <div class="container">
        <h2 class="heading">Welcome to Review Management System !</h2>
        <p class="subheading">Choose an option below to get started:</p>
        <div class="btn-container">
            <a href="<?= base_url('Admin/login') ?>" class="btn">Admin Login</a>
            <a href="<?= base_url('Admin/register') ?>" class="btn">Admin Register</a>
            <a href="<?= base_url('User/login') ?>" class="btn">User Login</a>
            <a href="<?= base_url('User/register') ?>" class="btn">User Register</a>
            <a href="https://github.com/amal-krishna-m-u/SElab.git" target="_blank" class="btn btn-secondary">Explore on Github</a>
        </div>
        <p class="subheading">Or check out our <a href="#" class="link">leaderboards</a> for the best web and mobile applications out there!</p>
    </div>
</body>
</html>
