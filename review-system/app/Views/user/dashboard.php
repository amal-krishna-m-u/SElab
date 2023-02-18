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
    <a href="/Application/selectCategory"> Select category </a>
    <br>
    <form action= "<?= base_url('/Application/applicationLeaderbaord')"  method = post >
    <select name="category" id="category">
    <?php 
                
        $db = mysqli_connect('localhost', 'root', '', 'review_system');
        $sql = "SELECT * FROM category";
        $result = mysqli_query($db, $sql);
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($categories as $category): ?>
        <option value="<?= $category['id'] ?>"><?= $category['catname'] ?></option>
    </select>
    <input type="submit" value="Submit">
    <a href="/Application/submitReview"> Review Detials </a>
    <a href="/Application/viewReviews"> Add Application </a>
    <a href="/Application/viewReviews"> View Reviews </a>
    
    <a href="/User/login">Logout</a>



</body>
</html>