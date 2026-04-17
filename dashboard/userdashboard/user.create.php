<?php require("dashboard/head.dash.php"); ?>
<?php require("dashboard/headsearch.dash.php"); ?>
<div class="container-fluid">
    <div class="row">
        <?php require("dashboard/navside.dash.php"); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <section class="">
                        <!-- Jumbotron -->
                        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
                            <div class="container">
                                <div class=" gx-lg-5 align-items-center">
                                    <div class="col-lg-12 mb-5 mb-lg-0">    
                                        <h4 class="mb-3">Create new user</h4>
                                        <form class="needs-validation" action="/user" method="post">
                                            <div class="row g-4">
                                                <div class="col-sm-12">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control" id="firstName" value="">
                                                    <?php if (isset($errors['name'])): ?>
                                                        <p class="text-danger"><?= $errors['name'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="">
                                                    <?php if (isset($errors['email'])): ?>
                                                        <p class="text-danger"><?= $errors['email'] ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-12">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" id="password">
                                                    <?php if (isset($errors['password'])): ?>
                                                        <p class="text-danger"><?= $errors['password'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-12">
                                                    <label for="role" class="form-label">Role</label>
                                                    <input type="role" class="form-control" name="role" id="role">
                                                    <?php if (isset($errors['role'])): ?>
                                                        <p class="text-danger"><?= $errors['role'] ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <hr class="my-4">

                                                <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2026–2027 TED IT</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.instagram.com/">instagram</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
            </footer>
        </main>
    </div>
</div>



<?php require("dashboard/footer.dash.php"); ?>