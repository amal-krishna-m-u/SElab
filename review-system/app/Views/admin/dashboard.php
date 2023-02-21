<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--link for icons and etc -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />






  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-OJ3qC3bLSmKP7S2EJlRcXVUz1soU4LLZUz1igwTzzljMngPsljvnN72aLNS94ROGWXQJFnEpmzT1IewHJz56lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

<!-- Offcanvas Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Dashboard</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/listApplications') ?>">List Of Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/listOfUsers') ?>">List of users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/addCategory') ?>">Add Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/addApplication') ?>">Add Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/verifyApplication') ?>">Verify Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/listOfUsers') ?>">Delete user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/deleteCategory') ?>">Delete Category</a>
          </li>
          <!-- 
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/editCategory') ?>">Edit category</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/Admin/login')?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Welcome <?php echo $name; ?></h2>
            <p>Email: <?php echo $email; ?></p>
        </div>
        <div class="col-md-6">
            <h2>Status</h2>
            <p><?php echo ($status == 0) ? 'Active' : 'Inactive'; ?></p>
        </div>
    </div>
</div>
<div class="container my-3">


  <h2>Links</h2>
<ul class="list-group">
  <li class="list-group-item"><a href="#"><span class="material-symbols-outlined">
home_app_logo
</span>           Home</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/listApplications') ?>"><span class="material-symbols-outlined">
receipt_long
</span>           List Of Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('User/listOfUsers') ?>"><span class="material-symbols-outlined">
contact_page
</span>           List of users</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/addCategory') ?>"><span class="material-symbols-outlined">
category
</span>           Add Category</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/addApplication') ?>"><span class="material-symbols-outlined">
add_to_photos
</span>           Add Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/verifyApplication') ?>"><span class="material-symbols-outlined">
library_add_check
</span>           Verify Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('User/deleteUser') ?>"><span class="material-symbols-outlined">
person_remove
</span>           Delete user</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/deleteCategory') ?>"><span class="material-symbols-outlined">
delete_sweep
</span>           Delete Category</a></li>
  <li class="list-group-item"><a href="<?= base_url('Admin/editCategory') ?>"><span class="material-symbols-outlined">
edit
</span>           Edit category</a></li>
</ul>

</div>


<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
