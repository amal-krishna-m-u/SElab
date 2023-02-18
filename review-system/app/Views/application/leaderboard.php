<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leaderboard</title>
</head>
<body>
<?php foreach ($data as $app): ?>
    <div>
        <a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a>
        <p>Rating: <?= $app['rating'] ?></p>
        <p>Platform: <?= $app['platform'] ?></p>
        <p>App ID: <?= $app['appid'] ?></p>
    </div>
<?php endforeach; ?>


</body>
</html>