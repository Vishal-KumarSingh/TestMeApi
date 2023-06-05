
<?php

if(isset($_POST["noofquestion"])){
   $noofquestion = $_POST["noofquestion"];

  $questionArray = array();


   for($i=0; $i< $noofquestion; $i++ ){
      $question =$_POST["question".$i];
      $optionA = $_POST["optionA".$i];
      $optionB= $_POST["optionB".$i];
      $optionC= $_POST["optionC".$i];
      $optionD = $_POST["optionD".$i];
      $answer= $_POST["answer".$i];
      $topic= $_POST["topic".$i];

      $sql = "INSERT INTO `test`.`question`
          (
          `description`,
          `topic`,
          `optionA`,
          `optionB`,
          `optionC`,
          `optionD`,
          `answer`)
          VALUES
          (
          '".$question."' ,
           '".$optionA."' ,
           '".$optionB."' ,
           '".$optionC."' ,
           '".$optionD."' ,
           '".$answer."' ,
           '".$topic."' 
          ) " ;
      include "include/conn.php";
      $result = mysqli_query($conn , $sql);
      $last_id = mysqli_insert_id($conn);

      array_push($questionArray , $last_id);
   }

   $questions = implode("/" , $questionArray);
   $testid = $_POST["testid"];
    $sql = "update test set questions = '".$questions."' where id=".$testid;
   $result = mysqli_query($conn , $sql );
   if($result){
      echo "Test saved successfully";
   }
   //print_r($questionArray);
}
?>