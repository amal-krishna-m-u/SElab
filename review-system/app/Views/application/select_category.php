<?php
$conn = mysqli_connect("localhost","root","","review_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$session = session();
$id = $session->get('user');

$sql = "SELECT catid FROM usercat WHERE userid=$id";
$result = mysqli_query($conn,$sql);

if($result){
    foreach($result as $cat){ 
        $i= $cat['catid'];
        $tempinq="INSERT INTO tempcat ( usercatid) VALUES ($i)";
        $run=mysqli_query($conn,$tempinq);
        if(!$run) echo"error";
    }
}

$sql_interest1 = "SELECT * FROM category WHERE catid NOT IN (SELECT usercatid FROM tempcat)";
$result = mysqli_query($conn,$sql_interest1);

//this table exist
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">






  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Password_reset/Css/fp.css">
  <style>
    /* The following styles are for the divScroll class */
    .divScroll::-webkit-scrollbar {
      display: none;
    }
    .divScroll {
      overflow: scroll;
      height: 400px;
      width: 570px;
      -ms-overflow-style: none; 
      scrollbar-width: none;  
    }

    /* The following styles are for the background-image class */
    .background-image {
      background-image: url('./lib.jpg') ;
      background-size: cover;
      width: 800px;
      height: 480px;
    }
  </style>
  <title>category</title>
</head>
<body>
  <?php include('header.php');?>
  <!--
  <button class="btn btn-primary btn-sm" name="prev" id="prev" onclick="window.history.back()">PREV</button>
  --><div class="container-fuild"> 
<div class="card">   
  <div class="background-image"> 
  <header><h1>
    Find your category
</h1>
</header>
<br>
<form action ="<?= base_url('Application/selectCategory') ?>"  method="post">
<!---<form action ="debug.php" method ="post">-->
  <div class="divScroll">  
<?php
$sql_interest = "SELECT * FROM category EXCEPT ".$sql_interest1."";

//completed here line number 86

$result = mysqli_query($conn,$sql_interest1);

if(mysqli_num_rows($result)>0)

{
  foreach($result as $cat)
  {
    ?>
<div class="group">  
<input type = "checkbox" name = "catid[]" value="<?= $cat['catid']; ?>"  /> 
<?= $cat['catname']; ?>  
<br>
</div>
    <?php
  }
}
else { echo "NO Record Found";}
?>
<br>
</div>
</div>
</div>
<button  class="btn btn-outline-success" name="save_multicheckbox" >Confrim</button>
</div>


<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>

