<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
* {
    padding: 5px;
  }
  </style>
<?php

if(isset($_POST["noofquestion"])){
  
   $noofquestion = $_POST["noofquestion"];
  if($noofquestion == ''){ 
    exit("No of quesiton can't be zero") ; }
   $testname = $_POST["testname"];
   if($testname == ''){ 
    exit("Test name can't be null ") ; }
   $testdesc = $_POST["testdesc"];
   if($testdesc == ''){ 
    exit("Test desc can't be null ") ; }
   $duration = $_POST["duration"];
   if($duration == ''){ 
    exit("Test duration can't be null ") ; }   
   $testtopic = $_POST["testtopic"];
   if($testtopic == ''){ 
    exit("Test topic can't be null ") ; }
   $sql = "INSERT INTO `test`
   (`name`,
   `description`,
   `time`,
   `topic`)
   VALUES
   (
   '".$testname."',
   '".$testdesc."',
   '".$duration."',
   '".$testtopic."'
    )";
  include "include/conn.php";
  $res = mysqli_query($conn , $sql);
  if($res){

    $last_id = mysqli_insert_id($conn);
?>


<form method="post" action="saveQuestion.php" >
<?php  for($i=0; $i < $noofquestion; $i++) { ?>

    <input type="text"  style="display:none;" class="form-control" name="noofquestion" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $noofquestion; ?>">
    <input type="text"  style="display:none;" class="form-control" name="testid" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $last_id; ?>">

<div class="form-group">
    <label for="exampleInputEmail1">Question </label>
    <input type="text" class="form-control" name="question<?php echo $i;?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your question <?php echo $i;?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Option A </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="optionA<?php echo $i;?>"  aria-describedby="emailHelp" placeholder="Option A">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Option B </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="optionB<?php echo $i;?>"  aria-describedby="emailHelp" placeholder="Option B ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Option C </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="optionC<?php echo $i;?>"  aria-describedby="emailHelp" placeholder="Option C ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Option d </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="optionD<?php echo $i;?>"  aria-describedby="emailHelp" placeholder=" Option D">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Answer </label>
    <input type="text" class="form-control" name="answer<?php echo $i;?>"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your answer 1 for A and 4 for D ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Topic  </label>
    <input type="text" class="form-control" name="topic<?php echo $i;?>"   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Addition topic info use hash tags  ">
  </div>
  <?php
}
?>



  <button type="submit" class="btn btn-primary">Publish Test </button>



<?php

  }
}
?>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>