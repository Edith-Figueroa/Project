<?php
$usuario=$_POST['Usuario'];
$Contrasenia=$_POST['Contrasenia'];
session_start();
$_SESSION['Usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios WHERE Usuario='$usuario' and Contrasenia='$Contrasenia'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
  header("location:../index.php");
}else{
  ?>
  <?php
  include("ERROR.php");
  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);