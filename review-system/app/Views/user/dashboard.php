<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Dashboard</h1>
    <p><?php echo $email; ?></p>
    <p><?php echo $name; ?></p>
    <p><?php echo $dob; ?></p>
    <p><?php echo $password; ?></p>

    <a href="/User/editDetails">Edit Details</a>
    <a href="/Application/selectCategory">Select category</a>
    <a href="/User/login">Logout</a>



</body>
</html>