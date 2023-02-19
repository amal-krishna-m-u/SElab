<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Info for <?= $application['name'] ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
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
    </style>
</head>
<body>
<<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="text-center text-primary mt-5 mb-4"><?= $application['name'] ?></h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $application['name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $application['platform'] ?></h6>
                    <p class="card-text"><?= $application['url'] ?></p>
                    <p class="card-text"><?= $application['rating'] ?></p>
                </div>
            </div>

            <h2 class="text-primary mt-4">Reviews</h2>

            <div style="max-height: 300px; overflow-y: scroll;">
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
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h
</body>
</html>
