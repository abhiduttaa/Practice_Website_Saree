<?php
$hostname='localhost';
$u_name='root';
$pass='';
$db_name='saree';

$con=mysqli_connect($hostname,$u_name,$pass,$db_name);
if(!$con){
    // echo 'success';
    die(mysqli_error($con));
}
else{
    // echo 'fail';
    
}
?>