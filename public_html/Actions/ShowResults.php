<?php
$usr_id=getUserFromToken($post["token"])["id"];
ResponseGenerator(1 , $post["token"] , "" , array("data"=>Read("results" , ["user_id=".$usr_id])));