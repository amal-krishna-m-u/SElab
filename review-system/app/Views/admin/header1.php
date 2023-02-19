<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="btn" href="<?= base_url('Admin/login') ?>">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="<?= base_url('Admin/register') ?>">Admin Register</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="<?= base_url('User/login') ?>">User Login</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="<?= base_url('User/register') ?>">User Register</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary" href="https://github.com/amal-krishna-m-u/SElab.git" target="_blank">Explore on Github</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
