<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leaderboard</title>
</head>
<body>
    <?php foreach($result as $res): ?>
        <h1><?php echo $res['name']; ?></h1>
        <p><?php echo $res['appid']; ?></p>
        <p><?php echo $res['rating']; ?></p>
        <p><?php echo $res['url']; ?></p>
        <p><?php echo $res['platform']; ?></p>
    <?php endforeach; ?>

</body>
</html>