<?php

//connection variables
$servername="localhost";
$username="root";
$password="";
$dbname="elearning";

//create connection
$con=mysqli_connect($servername,$username,$password,$dbname);

//checking connection
if($con){
    //echo "Connection Successful";
}
else{
    echo "Connection Failed".mysqli_connect_error();
}

?>