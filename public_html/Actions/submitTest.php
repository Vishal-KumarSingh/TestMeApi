<?php

$resultInfo = array();

$resultInfo["user_id"]=[getUserFromToken($post["token"])["id"]];

$resultInfo["marked_answers"] =[ json_encode($post["answer"])];

$resultInfo["test_id"] = [$post["examId"]];

$resultInfo["timetaken"] = [$post["timetaken"]];

//echo $post["examId"];
$exam =Read("test", ["id=".$post["examId"]]);
//print_r($exam);
$testname =  $exam[0]["name"];

$questionkey =  explode("/" , $exam[0]["questions"]);
//print_r($questionkey);
$correct = 0;
$incorrect = 0;
$count = -1;
foreach($questionkey as $q){
    //echo $q;
     $answer = Read("question" , ["id=".$q])[0]["answer"];
     $count = $count + 1;
     if(isset($post["answer"][$count])){
        if($post["answer"][$count] == $answer){
            $correct = $correct + 1 ; 
        }else{
            $incorrect = $incorrect + 1;
        }
     }
}
$resultInfo["marks"] = [$correct];
//print_r($questionkey);



InsertItem("results" , $resultInfo);


ResponseGenerator(1,$post["token"],"Congrates your marks is ".$correct,array("marks"=>"".$correct , "name"=>$testname , "test_id" => $resultInfo["test_id"][0]));
