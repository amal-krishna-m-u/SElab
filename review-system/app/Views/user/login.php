<!doctype html>
<html lang="en">
    <head>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <?php include('header1.php') ?> 
    <h1>Login Page</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>



<!-- this is the code for the Registeration form for the Admin and a existing admin has to validate the request in order for the new admin to be added -->
<!-- I am using bootstrap for the form -->
<!-- I am using CodeIgnitor 4 for the development and using object oriented approach -->
<!-- I am using the MVC framework for the development -->
<!-- I am using the PHP language for the development -->
<!-- I am using the MySQL database for the development -->

<!-- This is the form part of the code -->
<div class = "container">
    <form action = "<?= base_url('User/login') ?>" method = "post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


</form>
<br>
<a href="<?= base_url('User/register') ?>" ><button type="button" class="btn btn-primary">Register </button></a>
</div>

</body>
</html>