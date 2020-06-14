<?php

include "conexion.php";

$nomb=$_POST['nom'];

/*
$s= "select count(id) from carrito;";
			$query = $con->query($s);
			while ($r=$query->fetch_array()) {
				$a = $r[0];
				break;
			}
			$numc = $a+1;

*/

$s1= "delete from carrito where np='$nomb';";
    $query = $con->query($s1);
    echo $s1;
	print "<script>window.location='../carrito.php';</script>";





?> 