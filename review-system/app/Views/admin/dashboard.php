<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <a class="nav-link" href="<?= base_url('Application/listApplications') ?>">List Of Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/listOfUsers') ?>">List of users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Application/addCategory') ?>">Add Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Application/addApplication') ?>">Add Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Application/verifyApplication') ?>">Verify Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('User/deleteUser') ?>">Delete user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Application/deleteCategory') ?>">Delete Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Application/editCategory') ?>">Edit category</a>
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
  <li class="list-group-item"><a href="#"><img src="https://example.com/home.jpg" alt="Home">Home</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/listApplications') ?>"><img src="https://example.com/list-apps.jpg" alt="List of Applications">List Of Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('User/listOfUsers') ?>"><img src="https://example.com/list-users.jpg" alt="List of Users">List of users</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/addCategory') ?>"><img src="https://example.com/add-cat.jpg" alt="Add Category">Add Category</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/addApplication') ?>"><img src="https://example.com/add-app.jpg" alt="Add Application">Add Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/verifyApplication') ?>"><img src="https://example.com/verify-app.jpg" alt="Verify Applications">Verify Applications</a></li>
  <li class="list-group-item"><a href="<?= base_url('User/deleteUser') ?>"><img src="https://example.com/delete-user.jpg" alt="Delete User">Delete user</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/deleteCategory') ?>"><img src="https://example.com/delete-cat.jpg" alt="Delete Category">Delete Category</a></li>
  <li class="list-group-item"><a href="<?= base_url('Application/editCategory') ?>"><img src="https://example.com/edit-cat.jpg" alt="Edit Category">Edit category</a></li>
</ul>

</div>


<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-Y91dNz1/MFczIh/2PwhrOZo0rMPkEzUKodRyptYiJKgMfrBjQX9/sqFOm1cgsTejLmFSLf/ENtJzfhYcUDKsDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-LSn3BqY16WJyH1OGyf/83oelPwLM8WtTs02NtZK+k50M/TNYv9ELW/I0h87LkHjxXXwh2O8+tzWryGJZKz47Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
