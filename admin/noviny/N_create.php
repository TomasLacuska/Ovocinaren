<?php
    include "../connection.php";
    if(isset($_POST['submit'])){
      $nazov=$_POST["nazov"];
      $obsah=$_POST["obsah"];
      $obrazok=$_POST["obrazok"];
        $q = " INSERT INTO `noviny`(`nazov`, `obsah`, `obrazok`) VALUES ( '$nazov', '$obsah', '$obrazok')";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>ADMIN</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../noviny.php">ADMIN NOVINY</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../noviny.php">Home</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Vytvor nový </h1>
 </div><br>

 <input type="hidden" name="id" value="" class="form-control"> <br>

 <label> NAZOV: </label>
 <input type="text" name="nazov" value="" class="form-control"> <br>

 <label> OBSAH: </label>
 <input type="text" name="obsah" value="" class="form-control"> <br>

 <label> OBRAZOK: </label>
 <input type="text" name="obrazok" value="" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="../noviny.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>