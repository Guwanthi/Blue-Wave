<?php

if($_SERVER['HTTP_HOST']=="localhost"){
        $con=  mysqli_connect("localhost","root","","hotel","3306");  
 }else{
       $con=  mysqli_connect("localhost","tararfda_root","_FQ@QvdW=k7l","tararfda_tara","3306");   
 }


if (mysqli_connect_errno()) {
    
    echo "fail to connect to my sql" . mysqli_connect_error();
    
} else {
   
}


?>
