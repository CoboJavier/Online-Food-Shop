<script>
var reply=confirm("¿Seguro que desea salir del sistema?")
if (reply==true) 
{
    <?php

session_start();
session_destroy();
include "conexion.php";
$query = $con->query($s1);
print "<script>window.location='../login.html';</script>";

?>
}
else 
{
    <?php
print "<script>window.location='../index.php';</script>";

?>
}
</script>



