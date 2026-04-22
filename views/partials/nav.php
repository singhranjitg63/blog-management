<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">My Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/" class="<?= urlIs('./') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about" class="<?= urlIs('/about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact" class="<?= urlIs('/contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./help" class="<?= urlIs('/help') ?>">Help</a>
                </li>
            </ul>
        </div>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        
        <div class="text-end">
            <a class="btn btn-" href="/login" class="<?= urlIs('/login') ?>">Login</a>
            <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
 
    </div>
</nav>