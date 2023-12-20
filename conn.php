<?php
function con()
{
$con=mysqli_connect("localhost","root","","smp");
if(!$con)
{
    
    die("connection failed".mysqli_connect_error());
    return mysqli_connect_error();
}
return $con;
}

?>