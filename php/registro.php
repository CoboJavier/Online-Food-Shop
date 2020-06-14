<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from cliente where CI=\"$_POST[username]\" or EMAIL=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.html';</script>";
				
			
			}
			

			$s= "select max(iddireccion) from direccion;";
			$query = $con->query($s);
			while ($r=$query->fetch_array()) {
				$a = $r[0];
				break;
			}
			$numc = $a+1;
			
			$dir = "insert into direccion(IDDIRECCION, CALLE1, CALLE2, NUMCASA) value ($numc,\"$_POST[c1]\",\"$_POST[c2]\",\"$_POST[nc]\");";
			$q = $con->query($dir);
			
			
			if($q!=null){
				$sql = "insert into cliente(CI, NOMBRE, TELEFONO, EMAIL, PASS, IDDIRECCION) value ($_POST[username],\"$_POST[fullname]\",$_POST[telefono],\"$_POST[email]\",\"$_POST[password]\",$numc);";
				$query = $con->query($sql);
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.html';</script>";
				
				//header('Location: http://localhost/basein22/basein/PicoFino/');
			}else{
				print "<script>alert(\"Registro erroneo. Ingrese correctamente los datos\");window.location='../registro.html';</script>";
			}

			

	
		}
	}
}

?>