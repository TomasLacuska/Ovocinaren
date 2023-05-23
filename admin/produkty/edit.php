<?php
  include "../connection.php";
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:../produkty.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from produkty where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:../produkty.php");
      exit;
    }
    $nazov=$row["nazov"];
    $popis=$row["popis"];
    $obrazok=$row["obrazok"];
    $featured=$row["featured"];

  }
  else{
    $id = $_POST["id"];
    $nazov=$_POST["nazov"];
    $popis=$_POST["popis"];
    $obrazok=$_POST["obrazok"];
    $featured=$_POST["featured"];

    $sql = "update produkty set nazov='$nazov', popis='$popis', obrazok='$obrazok', featured='$featured' where id='$id'";
    $result = $conn->query($sql);
    
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="../produkty.php">ADMIN PRODUKTY</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../produkty.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAZOV: </label>
 <input type="text" name="nazov" value="<?php echo $nazov; ?>" class="form-control"> <br>

 <label> POPIS: </label>
 <input type="text" name="popis" value="<?php echo $popis; ?>" class="form-control"> <br>

 <label> OBRAZOK: </label>
 <input type="text" name="obrazok" value="<?php echo $obrazok; ?>" class="form-control"> <br>

 <label> FEATURED: </label>
 <input type="int" name="featured" value="<?php echo $featured; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="../produkty.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>