<?php require("head.dash.php"); ?>
<?php require("headsearch.dash.php"); ?>
<div class="container-fluid">
  <div class="row">
      <?php require("navside.dash.php"); ?>
      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="mb-3">Create new blogs</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="firstName" placeholder="" value="" required>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contant">Contant</label>
                                    <textarea class="form-control" name="Contant" id="exampleFormControlTextarea1" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="user_id" class="form-label">User id</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" name="user_id" id="user_id">
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="categorie_id" class="form-label">categorie id</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" name="categorie_id" id="categorie_id">

                                </div>
                            </div>
                            <div class="col-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="url" class="form-control" name="image" id="image" required>

                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
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

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $contant = $_POST['contant'];
    $user_id = $_POST['user_id'];
    $categorie_id = $_POST['categorie_id'];
    $image = $_POST['image'];

    try{
        $sql = "INSERT INTO post(title,contant,user_id,categorie_id,image)
        VALUES ('$title', '$contant', '$user_id','$categorie','$image')";
        $dsn ->exec($sql);
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
}
  

?>

  <?php require("dashboard/footer.dash.php"); ?>