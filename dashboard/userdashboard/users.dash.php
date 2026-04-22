<?php require("dashboard/head.dash.php"); ?>
<?php require("dashboard/headsearch.dash.php"); ?>
<div class="container-fluid">
    <div class="row">
        <?php require("dashboard/navside.dash.php"); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <h2>Users Table</h2>
                    <button class="btn btn-primary m-3"><a class="text-white" href="/user">Add new User</a></button>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result): ?>
                            <tr>
                                <td> <?= $result["id"] ?> </td>
                                <td> <?= $result["name"] ?> </td>
                                <td> <?= $result["email"] ?> </td>
                                <td> <?= $result["role"] ?> </td>
                                <td>
                                    <button class="btn btn-success">Update</button>
                                    <form action="/delete" method="POST" >
                                        <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                        <button type="submit" class="btn btn-primary">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>



<?php require("dashboard/footer.dash.php"); ?>