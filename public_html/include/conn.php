<?php
//$conn  = mysqli_connect("127.0.0.1" , "root" , "" , "testme");
$conn  = mysqli_connect("localhost" , "id17903953_root" , "(ZZ@@Q*_LWtO1k{X" , "id17903953_testme");
$post = json_decode(file_get_contents("php://input"),true);

include_once "lib.php";
POSTpurifier();