<?php 
    $con = mysqli_connect("localhost","root","","demo") or die (mysql_error());

    if ($con){
        echo "";
    }
    else{
        echo "DB not connected";
    }
?>