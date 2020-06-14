<?php

include "conexion.php";

session_start();
$_SESSION['nombre']=$_POST['np'];
$_SESSION['precio']=$_POST['pu'];
$_SESSION['cantidad']=$_POST['can'];
$_SESSION['idprod']=$_POST['idp'];

/*
$s= "select count(id) from carrito;";
			$query = $con->query($s);
			while ($r=$query->fetch_array()) {
				$a = $r[0];
				break;
			}
			$numc = $a+1;

*/

if(isset($_SESSION['user_id'])){
	$s1= "insert into carrito(id, np, pu, can, idp) values($_SESSION[user_id], \"$_POST[np]\", $_POST[pu], $_POST[can], \"$_POST[idp]\");";
	$query = $con->query($s1);
	print "<script>window.location='../categoria.php';</script>";
}else{

	print "<script>alert(\"Inicio de sesión requerido.\");window.location='../login.html';</script>";
}





?> 

