<?php require("dashboard/head.dash.php"); ?>
<?php require("dashboard/headsearch.dash.php"); ?>
<div class="container-fluid">
    <div class="row">
        <?php require("dashboard/navside.dash.php"); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Blogs Table</h2>
                    <button class="btn btn-primary m-3"><a class="text-white" href="/blog">Add new Blog</a></button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id.No</th>
                            <th>Title</th>
                            <th>Contant</th>
                            <th>User_id</th>
                            <th>Categories_id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blogs as $blog): ?>
                            <tr>
                                <td> <?= $blog['id'] ?> </td>
                                <td> <?= $blog["title"] ?> </td>
                                <td> <?= $blog["contant"] ?> </td>
                                <td> <?= $blog["user_id"] ?> </td>
                                <td> <?= $blog["categories_id"] ?> </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>



<?php require("dashboard/footer.dash.php"); ?>