<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   

<style>
            h1{
                text-align: center;
                color: #000000;
                font-family: 'Times New Roman', Times, serif;
                font-size: 50px;
                font-weight: bold;
                text-shadow: 2px 2px 4px #000000;
            }
            label{
                font-size: 20px;
                font-weight: bold;
                color: #000000;
                font-family: 'Times New Roman', Times, serif;
            }
            .form-group{
                margin-top: 20px;
                margin-bottom: 30px;
            }
        
        </style>




    <?php
    $name="";
    $dob="";
    $password="";

    $data=[
        'name' => $name,
        'dob' => $dob,
        'password' => $password];
        


    ?>

</head>
<body>
    <?php include('header.php');?>
    <div class="container"> 



    <!-- used to edit user details including name,dob,password -->
    <form action="<?= base_url('/User/editDetails') ?>" method="post">
    <h1>Edit Details</h1>
    <div class="form-group"> 
        <label for="name">Name</label>
        <input type="text"  class="form-control"   name="name" id="name" value="<?php echo $data['name']; ?>">
        </div>

        <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $data['dob']; ?>">
        </div>
        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo $data['password']; ?>">
        </div>  
        <input type="submit" class="btn btn-primary" value="Submit">
        </div>
</body>
</html>