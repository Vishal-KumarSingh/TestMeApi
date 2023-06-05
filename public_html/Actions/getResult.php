<?php

$resultInfo = array();

$resultInfo["user_id"]=[getUserFromToken($post["token"])["id"]];





$report = Read("results left join test on results.test_id=test.id" , ["results.id=".$post["reportId"]]);



//print_r($questionkey);



ResponseGenerator(1,$post["token"],"",array("report"=>$report));
