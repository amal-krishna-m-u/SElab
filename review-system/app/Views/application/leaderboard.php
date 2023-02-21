<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .mobile-leaderboard {
            float: left;
            width: 50%;
        }
        .web-leaderboard {
            float: right;
            width: 50%;
        }
        .leaderboard-item {
            margin: 10px;
            padding: 10px;
            border: 0px solid #ccc;
            border-radius: 0px;
        }
    </style>
</head>
<body>
<nav class="navbar  navbar-dark bg-dark">
    <div class="container-fluid"> 
    <form class="d-flex" method="post" action = "<?= base_url('Aplication/leaderboardSearch') ?>">
        <input class="form-control me-1" aria-label="Search" type="text" name="search" >
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    <a href=<?= base_url('/User/dashboard')?> class="btn btn-outline-light"> Home </a>
    <a href="<?= base_url('/Application/viewReviews')?>" class="btn btn-outline-light">Review Details</a>
                <a href="<?= base_url('/Application/addapplication')?>" class="btn btn-outline-light"> Add Application </a>
  
    <a href="<?=base_url('/User/login')?>" class="btn btn-danger">Logout</a>
    </div>
</nav>
    <div class = "container-fluid"> 
<div class="mobile-leaderboard">
    <h2>Mobile Leaderboard</h2>
    <?php foreach ($data as $app): ?>
        <?php if ($app['platform'] == 'mobile' && (empty($_GET['q']) || strpos(strtolower($app['name']), strtolower($_GET['q'])) !== false)): ?>
            <div class="leaderboard-item">
                <div class = "card"> 
                <div class="card-header"> 
                <a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a>
                </div>
                <div class="card-text"> 
                <p>Rating: <?= $app['rating'] ?></p>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="<?= base_url('Application/rate?appid=' . urlencode($app['appid']) . '&name=' . urlencode($app['name'])) ?>" class="btn btn-outline-primary">Rate</a>

<a href="<?= base_url('Application/review?appid=' . urlencode($app['appid']) . '&name=' . urlencode($app['name'])) ?>" class="btn btn-outline-primary">Review</a>
<a href="<?= base_url('Application/moreinfo?appid=' . urlencode($app['appid'])) ?>" class="btn btn-outline-primary"> Moreinfo</a>
        </div>
</div>
        </div>
  
  


    </div>
        <?php endif; ?>
        <?php endforeach; ?>
</div>
<div class = "container-fluid"> 
<div class="web-leaderboard">
    <h2>Web Leaderboard</h2>
    <?php foreach ($data as $app): ?>
        <?php if ($app['platform'] == 'web' && (empty($_GET['q']) || strpos(strtolower($app['name']), strtolower($_GET['q'])) !== false)): ?>
            <div class="leaderboard-item">
            <div class = "card"> 
      <div class="card-header"> 
                <a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a>
                </div>
                <div class="card-text"> 
                <p>Rating: <?= $app['rating'] ?></p>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="<?= base_url('Application/rate')?>"class="btn btn-outline-primary"> Rate</a>
                <a href="<?= base_url('Application/review')?>"class="btn btn-outline-primary">Review</a>
                <a href="<?= base_url('Application/moreinfo')?>?appid=$app['appid']"class="btn btn-outline-primary"> Moreinfo</a>
</div>
</div>
</div>
</div>


<?php endif; ?>
<?php endforeach; ?>
</div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>