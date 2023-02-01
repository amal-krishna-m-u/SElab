<html>
    <head>
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


<div class="container">
<h1>ADMIN LOGNIN</h1>

<form action="<?= base_url('admin/login') ?>" method="post">
  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
  </div>
  <div>
    <input type="submit" value="Login">
  </div>
  </div>
</form>
</body>
</html>

