<?php
// Include config file
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $apuesta = $_POST['apuesta'];
   $color = $_POST['color'];
   $random_number = rand(1,100);
if($random_number<49){
   if($color=="negro"){
	$sql = "SELECT * FROM jugador WHERE id = ?";	
	if($stmt = mysqli_prepare($link, $sql)){
	   
	   mysqli_stmt_bind_param($stmt, "i", $param_id);
	   $param_id = trim($_POST['id']);
	   
	   if(mysqli_stmt_execute($stmt)){
	      $result = mysqli_stmt_get_result($stmt);
	      if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$monto = $row["monto"];
		$monto2 = (($monto * $apuesta)/100)*2;
		$nuevoMonto = $monto + $monto2;
		$sql = "UPDATE jugador SET monto=? WHERE id=?";
		if($stmt = mysqli_prepare($link, $sql)){
		   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
		   $param_monto = $nuevoMonto;
	           if(mysqli_stmt_execute($stmt)){
		      header("location: index.php");
	              exit();
		   }
		}
	      }
	   }
	}
	
   }
   else{
	$sql = "SELECT * FROM jugador WHERE id = ?";    
        if($stmt = mysqli_prepare($link, $sql)){

           mysqli_stmt_bind_param($stmt, "i", $param_id);
           $param_id = trim($_POST['id']);

           if(mysqli_stmt_execute($stmt)){
              $result = mysqli_stmt_get_result($stmt);
              if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $monto = $row["monto"];
                $monto2 = (($monto * $apuesta)/100);
                $nuevoMonto = $monto - $monto2;
                $sql = "UPDATE jugador SET monto=? WHERE id=?";
                if($stmt = mysqli_prepare($link, $sql)){
                   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
                   $param_monto = $nuevoMonto;
                   if(mysqli_stmt_execute($stmt)){
                      header("location: index.php");
		      exit();
                   }
                }
              }
           }
        }

   }
}
if($random_number>=49&&$random_number<98){ 
   if($color=="rojo"){ 
        $sql = "SELECT * FROM jugador WHERE id = ?";    
        if($stmt = mysqli_prepare($link, $sql)){

           mysqli_stmt_bind_param($stmt, "i", $param_id);
           $param_id = trim($_POST['id']);

           if(mysqli_stmt_execute($stmt)){
              $result = mysqli_stmt_get_result($stmt);
              if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $monto = $row["monto"];
                $monto2 = (($monto * $apuesta)/100)*2;
                $nuevoMonto = $monto + $monto2;
                $sql = "UPDATE jugador SET monto=? WHERE id=?";
                if($stmt = mysqli_prepare($link, $sql)){
                   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
                   $param_monto = $nuevoMonto;
                   if(mysqli_stmt_execute($stmt)){
                      header("location: index.php");
		      exit();
                   }
                }
              }
           }
        }

   }
  else{
	$sql = "SELECT * FROM jugador WHERE id = ?";    
        if($stmt = mysqli_prepare($link, $sql)){

           mysqli_stmt_bind_param($stmt, "i", $param_id);
           $param_id = trim($_POST['id']);

           if(mysqli_stmt_execute($stmt)){
              $result = mysqli_stmt_get_result($stmt);
              if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $monto = $row["monto"];
                $monto2 = (($monto * $apuesta)/100);
                $nuevoMonto = $monto - $monto2;
                $sql = "UPDATE jugador SET monto=? WHERE id=?";
                if($stmt = mysqli_prepare($link, $sql)){
                   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
                   $param_monto = $nuevoMonto;
                   if(mysqli_stmt_execute($stmt)){
                      header("location: index.php");
		      exit();
                   }
                }
              }
           }
        }

  }
}
if($random_number>=98){ 
   if($color=="verde"){ 
        $sql = "SELECT * FROM jugador WHERE id = ?";    
        if($stmt = mysqli_prepare($link, $sql)){

           mysqli_stmt_bind_param($stmt, "i", $param_id);
           $param_id = trim($_POST['id']);

           if(mysqli_stmt_execute($stmt)){
              $result = mysqli_stmt_get_result($stmt);
              if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $monto = $row["monto"];
                $monto2 = (($monto * $apuesta)/100)*15;
                $nuevoMonto = $monto + $monto2;
                $sql = "UPDATE jugador SET monto=? WHERE id=?";
                if($stmt = mysqli_prepare($link, $sql)){
                   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
                   $param_monto = $nuevoMonto;
                   if(mysqli_stmt_execute($stmt)){
                      header("location: index.php");
		      exit();
                   }
                }
              }
           }
        }

   }
   else{
	$sql = "SELECT * FROM jugador WHERE id = ?";    
        if($stmt = mysqli_prepare($link, $sql)){

           mysqli_stmt_bind_param($stmt, "i", $param_id);
           $param_id = trim($_POST['id']);

           if(mysqli_stmt_execute($stmt)){
              $result = mysqli_stmt_get_result($stmt);
              if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $monto = $row["monto"];
                $monto2 = (($monto * $apuesta)/100);
                $nuevoMonto = $monto - $monto2;
                $sql = "UPDATE jugador SET monto=? WHERE id=?";
                if($stmt = mysqli_prepare($link, $sql)){
                   mysqli_stmt_bind_param($stmt, "di", $param_monto, $param_id);
                   $param_monto = $nuevoMonto;
                   if(mysqli_stmt_execute($stmt)){
                      header("location: index.php");
		      exit();
                   }
                }
              }
           }
        }

   }
}


}
else{
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        echo $id;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="panel panel-default">
  <div class="panel-heading">Seleccione su puesta y el color</div>
  <div class="panel-body">
     <label>Seleccione su apuesta:</label>
     <select name="apuesta">
       <option value="8">8%</option>
       <option value="15">15%</option>
     </select>
     <label>Seleccione el color:</label>
     <select name="color">
       <option value="verde">Verde</option>
       <option value="rojo">Rojo</option>
       <option value="negro">Negro</option>
     </select>
     <input type="hidden" name="id" value="<?php echo $id; ?>"/>
     <input type="submit" class="btn btn-primary" value="Apostar">    
  </div>
  </div>
</form>

</div>
</body
</html>
