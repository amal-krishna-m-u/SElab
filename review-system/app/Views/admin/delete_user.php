<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <?php include('header.php');?>
    <h1>Delete User </h1>
    <!-- use bootstrap for styling
    -->
    <form action="<?php echo base_url('admin/delete_user') ?>" method="post">
        <label for="user">User Name</label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Delete User">
    </form>
    
</body>
</html>