<?php




$user_id=getUserFromToken($post["token"])["id"];


$username  = $post["username"];
$name = $post["name"];
$password = $post["password"];
$exam = $post["exam"];

$sql = "update user set email = '".$username."', name = '".$name."' , password = '".$password."' , exam='".$exam."' where id=".$user_id;

$result = mysqli_query($conn , $sql);

if($result){
    ResponseGenerator(1,$post["token"],"Your Profile is successfully updated  ");
}else{
    ResponseGenerator(0,$post["token"]," Failed to update your profile. Kindly try again later ");
}


