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
    <br>
    <a href="/Application/selectCategory"> Select category </a>
    <br>
    <form action= "<?= base_url('/Application/applicationLeaderbaord')?>"  method = post >
    <select name="category" id="category">
    <?php 
                    $session = session();
                    $id = $session->get('user');
        $db = mysqli_connect('localhost', 'root', '', 'review_system');
        $sql = "SELECT category.catname,category.catid FROM usercat JOIN category ON usercat.catid= category.catid WHERE usercat.userid=$id ";


        use CodeIgniter\Log\Logger;
        $log = service('logger');
        $log->debug('SQL Query: '.$sql);
        $result = mysqli_query($db, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($rows as $row)
        {
            $cat = $row['catname'];
            $catid = $row['catid'];
            echo "<option value='$catid'>$cat</option>";
        }
      ?>
        <h1> <?= $id ?> </h1>
    </select>
    <input type="submit" value="Submit">
    <br>
    <a href="/Application/viewReview"> Review Detials </a>
    <br>
    <a href="/Application/viewReviews"> Add Application </a>
    <br>
    <a href="/Application/viewReviews"> View Reviews </a>
    <br>
    <a href="/User/login">Logout</a>



</body>

</html>