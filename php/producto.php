<?php

include "conexion.php";

$s= "select * from producto;";

$query = $con->query($s);

for ($i=0; $i <= ($query->num_rows)  ; $i++) { 
while ($r=$query->fetch_array()) {
    
    ?>




<?php
break;
}
}

?>