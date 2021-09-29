<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <br><div class="card w-50" style="background-color: #ffbd54;">
  <div class="card-body">
    <h5 class="card-title"><center>Selamat Datang Admin!</center></h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
  <form method="POST"action="proseslogin.php">
  <form class="dropdown-menu p-4">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder=" Enter Password" name="password">
  </div>
  <div class="mb-3">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
</div>
</div>
</body>
</html>
