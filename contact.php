<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a class="nav-link active" href="./contact.html">iletişim</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
          <a class="nav-link" href="./login.html">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
    function test_input($data){
        $data = trim($data);
        $data=stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = test_input($_POST["email"]);
    $name = test_input($_POST["name"]);
    $surname = test_input($_POST["surname"]);
    $gender = test_input($_POST["gender"]);
    $range = $_POST["range"];
    $like = test_input($_POST["like"]);
    $opinion = test_input($_POST["opinion"]);
    
    
    ?>
    <div class="row">
      <div class="col-sm-6 mx-auto">
        <h1 class="text-center">Formunuz başarıyla gönderildi!</h1>
        <p><span class="fw-bold">Email Adresiniz:</span> <?php echo($email) ?></p>
        <p><span class="fw-bold">Adı:</span> <?php echo($name) ?></p>
        <p><span class="fw-bold">Soyadı:</span> <?php echo($surname) ?></p>
        <p><span class="fw-bold">Cinsiyet:</span> 
        <?php
        if($gender=="1"){
          echo("Erkek");
        }
        else if($gender=="2"){
          echo("Kadın");
        }
        else{
          echo("Belirtmek istemiyor/Diğer");
        }
         ?></p>
        <p><span class="fw-bold">Puan:</span> <?php echo($range) ?></p>
        <p><span class="fw-bold">Beğendi/Beğenmedi:</span> <?php echo($like) ?></p>
        <p><span class="fw-bold">Neden beğendi/beğenmedi? Nasıl geliştirilebilir?:</span> <?php echo($opinion) ?></p>
        <a href="./index.html">Anasayfa</a> 
      </div>
      
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>