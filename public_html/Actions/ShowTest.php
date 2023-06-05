<?php

$userid = getUserFromToken($post["token"])["id"];

//$sql = "select * from test left join results on test.id = results.test_id and results.user_id=".$userid;

ResponseGenerator(1 , $post["token"] , "" , array("data"=>Read("test" , [])));