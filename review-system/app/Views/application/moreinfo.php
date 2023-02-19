<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Info for <?= $application['name'] ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />   <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }
        .card-body-reviews {
            max-height: 300px;
            overflow-y: auto;
        }
        .reviews {
            margin-top: 30px;
        }
        .reviews h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .reviews .review-card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            background-color: #fff;
        }
        .reviews .review-card .review-text {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .reviews .review-card .review-info {
            display: flex;
            align-items: center;
        }
        .reviews .review-card .review-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .reviews .review-card .review-info .reviewer-name {
            font-size: 16px;
            font-weight: bold;
        }
        .reviews .review-card .review-info .review-date {
            font-size: 14px;
            color: #6c757d;
        }
        .disclaimer {
            font-size: 12px;
            color: #6c757d;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<body>
<?php include('header.php');?>
    <div class="container-fluid ">
        <div class="row">
            <div class="text-center col-md-15">
                <h1 class="text-center text-primary mt-5 mb-4"><?= $application['name'] ?></h1>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= $application['name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Available As <?= $application['platform'] ?> Application on 
                        <a href="<?= $application['url'] ?>" target="_blank" ><span class="material-symbols-outlined">
captive_portal
</span> </a></h6>
                        <p class="card-text">Description:<?= $application['description'] ?></p>
                        <p class="card-text">With a rating of <?= $application['rating'] ?></p>
                        <a  class="btn btn-outline-dark" href="<?= base_url('application/reviews')?>?appid = $application['appid']" class="btn btn-primary">Reviews</a>
                        <a  class="btn btn-outline-dark" href="<?= base_url('application/rating')?>?appid = $application['appid']" class="btn btn-primary">rating</a>
                    </div>
                </div>

                <h2 class="heading text-primary mt-4">Reviews</h2>

                <div class="card mb-3">
                    <div class="card-body card-body-reviews">
                        <?php foreach ($reviews as $review): ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $review['review'] ?></h5>
                                    <p class="card-text">Rating: <?= $review['rating'] ?></p>
                                    <p class="card-text">By: <?= $review['name'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <p class="disclaimer mt-5">Disclaimer: These reviews are made by users and not the system.</p>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #202124;
        }

        .container {
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }

        .card-body-reviews {
            max-height: 400px;
            overflow-y: auto;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .heading {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .disclaimer {
            font-size: 12px;
            color: #5f6368;
            margin-top: 40px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h+rrh3qEXfHZCU5QEtlu5gYcYRJH+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src
</body>
</html>
