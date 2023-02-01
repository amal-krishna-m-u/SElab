<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1506744038136-46273834b3fb");
            background-size: cover;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: Black;
            margin-top: 100px;
        }
        p {
            text-align: center;
            color: Black;
            font-size: 18px;
            max-width: 800px;
            margin: 20px auto;
        }
        a.btn-primary {
            display: block;
            margin: 20px auto;
            text-align: center;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.3);
            color: Blue;
            transition: all 0.3s ease-in-out;
            width: 200px;
        }
        a.btn-primary:hover {
            transform: scale(1.1);
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
    <title>Landingpage</title>
</head>
<body>
    <h1>Welcome to the Application Hub!</h1>
    <p>Tired of searching for the perfect application for your needs? Look no further! Our Application Hub is here to reduce your effort and provide you with a one-stop-shop for all your application needs. With our leaderboard of top-rated applications under different categories, you can easily find the right tool for the job. Explore our selection and discover the best applications available to make your life easier and more efficient. Join the Application Hub community today and start enjoying the benefits of hassle-free app selection!</p>
    <a class="btn btn-primary btn-lg" href="http://localhost:8080/1">Login/Registration</a>
    <script>
        document.querySelector("a").addEventListener("click", function () {
            document.body.style.backgroundPositionY = "-10px";
        });
    </script>
</body>
</html>
