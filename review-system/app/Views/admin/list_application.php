<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>List of Applications</title>
</head>
<body>
    <?php include('header.php');?>
    <div class="container">
        <h1 class="mt-5 mb-3">List of Applications</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Application Name</th>
                    <th>URL</th>
                    <th>Rating</th>
                    <th>Platform</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($applications as $app): ?>
                <tr>
                    <td><?php echo $app['name']; ?></td>
                    <td><a href= "<?php echo $app['url']; ?>">Official site</td>
                    <td><?php echo $app['rating']; ?></td>
                    <td><?php echo $app['platform']; ?></td>
                    <td><?php echo $app['description']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-8Agt1/oGwIoBdDZrjL9XrJnGswQq3+Dsl6HYQEG6fWpk6XY69j+SNd1ZgR9XW+HJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
