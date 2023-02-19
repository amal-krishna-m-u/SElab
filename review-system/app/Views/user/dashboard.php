<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        /* Custom color scheme */
        :root {
            --primary: #2c3531;
            --secondary: #116466;
            --light: #D9B08C;
            --warning: #FFCB9A;
            --success: #D1E8E2;
        }
    </style>
</head>

<body class="bg-light">
    <nav class="navbar  navbar-dark bg-dark">
    <div class="container-fluid "> 
<a href="/Application/viewReview" class="btn btn-outline-light">Review Details</a>
        <br>
                <a href="/Application/viewReviews" class="btn btn-outline-light"> Add Application </a>
    <br>
    <a href="/Application/viewReviews" class="btn btn-outline-light"> View Reviews </a>
    <br>
    <a href="/User/login" class="btn btn-danger">Logout</a>
</nav>

    <div class="container my-5">
        <h1 class="text-center mb-5">Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Name:</strong> <?php echo $name; ?></p>
                <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
                <p><strong>Password:</strong> <?php echo $password; ?></p>

                <a href="/User/editDetails" class="btn btn-primary">Edit Details</a>
                <br>
                <a href="/Application/selectCategory" class="btn btn-secondary my-3">Select category</a>
            </div>
            <div class="col-md-6">
                <form action="<?= base_url('/Application/applicationLeaderbaord') ?>" method="post">
                    <div class="mb-3">
                        <label for="category" class="form-label">Select a category</label>
                        <select name="category" id="category" class="form-select">
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
                                foreach ($rows as $row) {
                                    $cat = $row['catname'];
                                    $catid = $row['catid'];
                                    echo "<option value='$catid'>$cat</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>

                </div>


<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>