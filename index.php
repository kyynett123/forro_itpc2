<?php
$conn = mysqli_connect ("localhost", "root", "", "psits")

if (!$conn){
    die("wala connect");
}

$email =$_Post["email"];
$pass  =$_POST[\password];

$sql = "Select * from students Where email = '$email' 
and password = '$password'";

$result=mysqil_query($conn, $sql);

if(mysqil_num_row($result) >0){
    echo("SUCCESS");
    exit();
    }

    else{
    echo("WALA GID YA");    
}
mysqil_close($conn);


?