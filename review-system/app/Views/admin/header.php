<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/Admin/dashboard')?>">Home</a>
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
            <a class="nav-link" href="<?= base_url('User/listOfUsers')?>">Delete user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/deleteCategory') ?>">Delete Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/editCategory') ?>">Edit category</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
