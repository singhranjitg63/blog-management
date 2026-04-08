<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<h3>log-in</h3>
<body style="justify-items:center; margin-top:100px; ">
  <div style="justify-items:center">
    <form action="form.php" method="POST" >
  <div >
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail">
  </div>
  <div >
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="inputPassword" >
  </div><br>
  <div class="col-12">
    <a class="btn btn-primary" href="/dashboard">log-in</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2026–2027</p>
  </div>
</form>
</div>

</body>
</html>