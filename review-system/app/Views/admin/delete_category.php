<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete category</title>
</head>
<body>
    <h1>Delete Category </h1>
<!-- use bootstrap for styling
-->
    <form action="<?php echo base_url('admin/delete_category') ?>" method="post">
        <label for="category">Category Name</label>
        <input type="text" name="category" id="category">
        <input type="submit" value="Delete Category">
    </form>


</body>
</html>