<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

</head>
<body>
    <h1>Edit Category</h1>
    <!-- use bootstrap for styling
    -->
    <form action="<?php echo base_url('admin/edit_category') ?>" method="post">
    <label> <?php echo $_COOKIE['categoryName'];  ?></label>    
    <label for="category">Category Name</label>
        <input type="text" name="category" id="category">
        <input type="submit" value="Edit Category">
</body>
</html>