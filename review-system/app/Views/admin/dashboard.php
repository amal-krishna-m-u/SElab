<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>



<!--




  <div class="container-fluid bg-primary text-white text-center">
    <h1>Admin Dashboard</h1>
    <p>Welcome, <span id="username"></span></p>
  </div>
  
  <div class="container">
    <h2>Links</h2>
    <ul class="list-group">
      <li class="list-group-item"><a href="#">List of Users</a></li>
      <li class="list-group-item"><a href="#">List of Applications</a></li>
      <li class="list-group-item"><a href="#">Edit Category</a></li>
      <li class="list-group-item"><a href="#">Delete Category</a></li>
      <li class="list-group-item"><a href="#">Delete User</a></li>
      <li class="list-group-item"><a href="#">Add Category</a></li>
      <li class="list-group-item"><a href="#">Add Application</a></li>
      <li class="list-group-item"><a href="#">Verify Application</a></li>
      <li class="list-group-item"><a href="#">Logout</a></li>
    </ul>
  </div>
</body>
</html>



 bootstramp std offcanvas navbar
-->


<nav class="navbar navbar-expand-lg bg-body-tertiary" ata-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/listApplications') ?>">List Of Applications</a>
        </li>
      

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('User/listOfUsers') ?>">List of users </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/addCategory') ?>">Add Category</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/addApplication') ?>">Add Applications</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/verifyApplication') ?>">Verify Applications</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('User/deleteUser') ?>">Delete user</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/deleteCategory') ?>">Delete Category</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('Application/editCategory') ?>">Edit category</a>
        </li>

        
       
      <form class="d-flex" role="search" action=<?= base_url('Application/searchApplication') ?>>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="<?= base_url('Admin/logout') ?>"><button type="button" class="btn btn-danger">Logout</button>
</a>
        <style>
          .btn-danger {
           padding: 0.375rem 0.75rem;
           margin-left: 10px;
          }
        </style>
      </form>
    </div>
  </div>
</nav>


</body>
</html>
