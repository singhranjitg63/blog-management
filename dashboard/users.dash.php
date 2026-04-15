<?php require("head.dash.php"); ?>
<?php require("headsearch.dash.php"); ?>
<div class="container-fluid">
  <div class="row">
      <?php require("navside.dash.php"); ?>
      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div>
                    <h4 class="mb-3">Create new user</h4>
                    <form class="needs-validation" action="/users" method="post">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" name="password" id="password" required>

                                </div>
                            </div>
                            <div class="col-12">
                                <label for="role" class="form-label">Role</label>
                                <input type="role" class="form-control" name="role" id="role" required>

                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg"  type="submit">Create</button>
                        </div>
                    </form>
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