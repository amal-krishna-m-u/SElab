<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
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
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="post" action = "<?= base_url('Aplication/leaderboardSearch') ?>">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
<div class="mobile-leaderboard">
    <h2>Mobile Leaderboard</h2>
    <?php foreach ($data as $app): ?>
        <?php if ($app['platform'] == 'mobile' && (empty($_GET['q']) || strpos(strtolower($app['name']), strtolower($_GET['q'])) !== false)): ?>
            <div class="leaderboard-item">
                <a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a>
                <p>Rating: <?= $app['rating'] ?></p>
                <p>Platform: <?= $app['platform'] ?></p>
                <p>App ID: <?= $app['appid'] ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div class="web-leaderboard">
    <h2>Web Leaderboard</h2>
    <?php foreach ($data as $app): ?>
        <?php if ($app['platform'] == 'web' && (empty($_GET['q']) || strpos(strtolower($app['name']), strtolower($_GET['q'])) !== false)): ?>
            <div class="leaderboard-item">
                <a href="<?= $app['url'] ?>" target="_blank"><?= $app['name'] ?></a>
                <p>Rating: <?= $app['rating'] ?></p>
                <p>Platform: <?= $app['platform'] ?></p>
                <p>App ID: <?= $app['appid'] ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</body>
</html>