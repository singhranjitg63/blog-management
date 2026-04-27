<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <?php
    if ($_SESSION['user']['role'] && $_SESSION['user']['role'] == 'admin') {
    ?>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="/dash">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="/users">
            <span data-feather="file"></span>
            Users
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="/blogs">
            <span data-feather="file"></span>
            Blogs
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="#">
            <span data-feather="users"></span>
            Customers
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="#">
            <span data-feather="users"></span>
            Admin
          </a>
        </li>
      </ul>
    <?php } ?>
    <?php
    if ($_SESSION['user']['role'] && $_SESSION['user']['role'] !== 'admin') {
    ?>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="/dash">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="/blogs">
            <span data-feather="file"></span>
            Blogs
          </a>
        </li>
        <li class="nav-item hover">
          <a class="nav-link text-dark" href="#">
            <span data-feather="users"></span>
            Customers
          </a>
        </li>
      </ul>
    <?php } ?>


    <canvas class="my-4 w-100" id="myChart" width="900" height="800"></canvas>
  </div>
</nav>