<html>
    <head>
        <title>Update</title>
        <!-- this includes same css as the admin.php and dashboard.php -->
        <!-- this is for the update admins username and password -->
        <!-- style for the admin.php is in the admin.php file itself it in not in a css file -->
        <style>
            body{
                background-color: #f2f2f2;
            }
            .container{
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .box{
                width: 400px;
                height: 400px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                padding: 20px;
                box-sizing: border-box;
            }
            .box h1{
                margin: 0;
                padding: 0;
                text-align: center;
                font-size: 22px;
                color: #333;
            }
            .box input{
                width: 100%;
                margin-bottom: 20px;
            }
            .box input[type="text"], .box input[type="password"]{
                border: none;
                border-bottom: 1px solid #333;
                background: transparent;
                outline: none;
                height: 40px;
                color: #333;
                font-size: 16px;
            }
            .box input[type="submit"]{
                border: none;
                outline: none;
                height: 40px;
                background: #333;
                color: #fff;
                font-size: 18px;
                border-radius: 20px;
            }
            .box input[type="submit"]:hover{
                cursor: pointer;
                background: #666;
                color: #fff;
            }
            .box a{
                text-decoration: none;
                font-size: 12px;
                line-height: 20px;
                color: darkgrey;
            }
            .box a:hover{
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <h1>Update</h1>
                <form action="<?php echo base_url('/admin/update'); ?>" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="number" name="id" placeholder="ID">
            
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
    </body>
</html>
