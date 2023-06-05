<?php
include "include/conn.php";

function InsertItemDB($table , $data , $showquery=false){
global $conn;
$table = mysqli_real_escape_string($conn , $table);
$sql = "insert into ".$table." (";
$tuples = "";
$column  = array();
foreach($data as $key=>$value){
$sql.=$key.",";
array_push($column , $key);
}
$sql[strlen($sql)-1]=' ';


//adding tuple entry values
$i=0;
foreach($data[$column[0]] as $entry){
    $tuples .= "(";
    foreach($column as $val){
        $tuples .= '"'.$data[$val][$i].'",';
    }
    $tuples[strlen($tuples)-1]=")";
    $tuples .= ",";
    $i=$i+1;
}
$tuples[strlen($tuples)-1]=" ";


//appending both values
$query = $sql .") values ".$tuples;

if($showquery){echo $query;}

$result = mysqli_query($conn , $query);

return $result;

}


$text = file_get_contents("question.txt");
$q = array(
    "description" => array(),
    "optionA" => array() ,
    "optionB" => array(),
    "optionC" => array(),
    "optionD" => array(),
    "answer" => array(),
   // "solution"=>array()
);
$question = explode("###" , $text);
echo "<pre>";
foreach($question as $arr){
    $set = explode("##" , $arr);
    array_push($q["description"] , $set[0]);
    array_push($q["optionA"] , $set[1]);
    array_push($q["optionB"] , $set[2]);
    array_push($q["optionC"] , $set[3]);
    array_push($q["optionD"] , $set[4]);
    array_push($q["answer"] , $set[5]);
    //array_push($q["solution"] , $set[6]);
}
if(isset($_GET["save"])){
    InsertItemDB("question" , $q);
}

 echo "<pre>";
 print_r($q);
 echo "</pre>";