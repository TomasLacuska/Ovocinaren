<?php
    include "../connection.php";
    if(isset($_POST['submit'])){
      $nazov=$_POST["nazov"];
      $popis=$_POST["popis"];
      $obrazok=$_POST["obrazok"];
      $featured=$_POST["featured"];
        $q = " INSERT INTO `produkty`(`nazov`, `popis`, `obrazok`,`featured`) VALUES ( '$nazov', '$popis', '$obrazok', '$featured')";

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
        <a class="navbar-brand" href="index.php">ADMIN PRODUKTY</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="produkty.php">Home</a>
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

 <label> POPIS: </label>
 <input type="text" name="popis" value="" class="form-control"> <br>

 <label> OBRAZOK: </label>
 <input type="text" name="obrazok" value="" class="form-control"> <br>

 <label> FEATURED: </label>
 <input type="int" name="featured" value="" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="../produkty.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>