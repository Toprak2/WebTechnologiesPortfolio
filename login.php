<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="./index.html">Hakkında</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cv.html">Özgeçmiş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sehrim.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.html">iletişim</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
          <a class="nav-link active" href="./login.html">Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="d-flex align-items-center justify-content-center vh-100">
  <form action="./login.php" method="post">
    <div class="row">
      <div class="col-12 ">
        <div class="mb-3">
          <label for="InputUsername" class="form-label">Kullanıcı Adı</label>
          <input name="username" class="form-control" id="InputUsername" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="InputPassword" class="form-label" >Şifre</label>
          <input name="password" type="password" class="form-control" id="InputPassword">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
      </form>


    </div>


<?php
function test_input($data){
    $data = trim($data);
    $data=stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$username=test_input($_POST["username"]);
$password=test_input($_POST["password"]);
if ($username=="b221210053" && $password=="123456") {
    # code...
    header("Location: ./index.html");
}else{
    echo("wrong password or username");
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 