<?php
$usuario=$_POST['Usuario'];
$Contrasenia=$_POST['Contrasenia'];
session_start();
$_SESSION['Usuario']=$usuario;

include('db.php');

$consulta="SELECT * FROM usuarios WHERE Usuario='$usuario' and Contrasenia='$Contrasenia'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

include '../SqlTools/database.php';
$a = new database();

$a->select('usuarios', '*', "Usuario='$usuario' and Contrasenia='$Contrasenia'");
$data = $a->sql;
$row = mysqli_fetch_assoc($data);

$idUser = $row['idUsuario'];
$idEnt = $row['Empresas_idEmpresas'];

if($filas){
  header("location:../index.php?idUsuario=$idUser&Empresas_idEmpresas=$idEnt");
}else{
  ?>
  <?php
  include("ERROR.php");
  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);