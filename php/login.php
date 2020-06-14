<?php

$uname = "admin";
$passw = "admin";

if($_POST["username"]==null && $_POST["password"]==null){
	print "<script>alert(\"Campos Vacios, Ingrese Datos.\");window.location='../login.html';</script>";
}


if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from cliente where (CI=\"$_POST[username]\" or EMAIL=\"$_POST[username]\") and PASS=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["CI"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"ID o Contraseña incorrectas.\");window.location='../login.html';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>alert(\"Ingreso correcto.\");window.location='../categoria.php';</script>";
								
			}
		}
	}
}



?>