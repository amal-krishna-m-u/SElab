<!--  This is a login page for admin ,and this uses the same style as loginpage , styling is done inside the head session and the 
same style is used .Admin login contains admin user-email and admins password -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body{
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        .container h1{
            text-align: center;
            margin-bottom: 20px;
        }
        .container form{
            display: flex;
            flex-direction: column;
        }
        .container form label{
            margin-bottom: 10px;
        }
        .container form input{
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .container form input[type="submit"]{
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .container form input[type="submit"]:hover{
            background-color: #45a049;
        }
        .container form a{
            text-decoration: none;
            color: #4CAF50;
        }
        .container form a:hover{
            text-decoration: underline;
        }
    </style>




</head>
<body>
    <h1>Admin</h1>
    <p>This is the admin page</p>
    
    <div class="container">
        <h1>Admin</h1>
        <form action="http://localhost:8080/Admin" method="post">
            <label for="username">Email</label>
            <input type="text" name="username" id="username" placeholder="Enter your user name">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="submit" value="Login">
        </form>
    </div>



    <a href="http://localhost:8080/1">Logingpage</a>
</body>
</html>