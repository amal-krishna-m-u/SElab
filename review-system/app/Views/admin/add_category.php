<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category </title>
</head>
<body>
    <?php include('header.php');?>
    <h1>Add new Category  </h1>
  
    
    <form action="<?php echo base_url('Admin/addcategory') ?>" method="post">
        <label for="category">Category Name</label>
        <input type="text" name="category" id="category">
        <input type="submit" value="Add Category">
    </form>

</body>
</html>