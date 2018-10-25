<?php 

include "form_checker.php";
 
$checker = new FormChecker($_POST); // ou $_GET


if($checker->is_validate())
{
    echo '<p style="color: green;"> It\' validate by FromChecker class </p>'; 
}
else 
{
    echo '<p style="color: red;"> It\' validate by FromChecker class </p>'; 
}

$checker->debug_checker();