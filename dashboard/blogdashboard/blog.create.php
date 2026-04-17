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
                                        <h4 class="mb-3">Create new blogs</h4>
                                        <form class="needs-validation" action="/blog" method="post">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" class="form-control" id="firstName" placeholder="" value="" >
                                                    <?php if (isset($errors['title'])): ?>
                                                        <p class="text-danger"><?= $errors['title'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-12">
                                                    <label for="contant">Contant</label>
                                                    <textarea class="form-control" name="contant" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                    <?php if (isset($errors['contant'])): ?>
                                                        <p class="text-danger"><?= $errors['contant'] ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-12">
                                                    <label for="user_id" class="form-label">User id</label>
                                                    <input type="text" class="form-control" name="user_id" id="user_id">
                                                    <?php if (isset($errors['user_id'])): ?>
                                                        <p class="text-danger"><?= $errors['user_id'] ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-12">
                                                    <label for="categories_id" class="form-label">categories id</label>
                                                    <input type="text" class="form-control" name="categories_id" id="categories_id">
                                                     <?php if (isset($errors['categories_id'])): ?>
                                                        <p class="text-danger"><?= $errors['categories_id'] ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-12">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="url" class="form-control" name="image" id="image">
                                                     <?php if (isset($errors['image'])): ?>
                                                        <p class="text-danger"><?= $errors['image'] ?></p>
                                                    <?php endif; ?>
                                                </div>

                                                <hr class="my-4">

                                                <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2026–2027 TED IT</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
            </footer>
        </main>
    </div>
</div>


<?php require("dashboard/footer.dash.php"); ?>