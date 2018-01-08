<?php

$actualiza = "update users set name='".$nombre.", email='".$mail."' where name='"._SESSION['user']['name']."'";

$rs = mysql_query($actualiza);

if ($rs == false) {
    echo '<p>ERROR</p>';
} else {
    echo '<p>*****CORRECTO******</p>';
}
?>

