<?php

$user = getUserFromToken($post["token"]);
$user_id = $user["id"];

//echo $user_id;

$data = Read("results left join test on results.test_id=test.id" , ["results.user_id=".$user_id]); 


ResponseGenerator(1, $post["token"] , "" , array("reports" => $data));