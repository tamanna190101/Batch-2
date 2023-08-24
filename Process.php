<?php
session_start();

$User = $_POST['username'];
$Pass = $_POST['password'];
$DOB = "August";
$Email = "imratul@gmaail.com";
$Phone = "015XXXXXX";

$Valid_name1 = "Imratul";
$Valid_pass1 = "1234";

$Valid_name2 = "Kona";
$Valid_pass2 = "123";

if($Valid_name1 == $User && $Valid_pass1 == $Pass){

    header("location: success.php");
}
else if($Valid_name2 == $User && $Valid_pass2 == $Pass){

    header("location: success2.php");
}

else{
    header("location: login.html");
}
?>