<html>  

<head> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

   </head> 
<body>
   <?php include('header.php'); ?>
    
    <!-- View file: add_application.php -->
    <div class="container">
    <h1 class="mb-5">Add Application</h1>


<form action="<?=base_url('/User/addApplication'); ?>" method="post">
<div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" name="name" required>
</div>

<div class="form-group">
  <label for="url">URL:</label>
  <input type="url" class="form-control" name="url" required>
</div>

<div class="form-group">
  <label for="description">Description:</label>
  <textarea class="form-control" name="description" required></textarea>
</div>

<div class="form-group">
  <label for="rating">Rating:</label>
  <input type="number" class="form-control" name="rating" min="0" max="5" step="0.1" required>
</div>
<div class="form-group">
  <label for="platform">Platform:</label>
  <select class="form-control" name="platform" required>
    <option value="mobile">mobile</option>
    <option value="web">web</option>
  </select>

<h2 class="mt-5">Categories:</h2>

<div class="form-group">
  <?php foreach ($categories as $category): ?>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="categories[]" value="<?php echo $category['catid']; ?>">
      <label class="form-check-label"><?php echo $category['catname']; ?></label>
    </div>
  <?php endforeach; ?>
</div>

<button type="submit" class="btn btn-primary mt-5">Add Application</button>


</form>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>