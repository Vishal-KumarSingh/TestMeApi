<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  * {
    padding: 5px;
  }
  </style>
<form action="addquestion.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Test Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="testname" aria-describedby="emailHelp" placeholder="Enter name of test">
    <small id="emailHelp" class="form-text text-muted">Name of the Test </small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Test Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="testdesc" aria-describedby="emailHelp" placeholder="Enter description of test">
    <small id="emailHelp" class="form-text text-muted">Description of the Test</small>
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Test Duration in minutes</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="duration" aria-describedby="emailHelp" placeholder="Test duration in minutes">
    <small id="emailHelp" class="form-text text-muted">Test duration in minutes </small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Test Topics</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="testtopic" aria-describedby="emailHelp" placeholder="Add in the form of hash tag ">
    <small id="emailHelp" class="form-text text-muted">Enter the test toic</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Number of question </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="noofquestion" aria-describedby="emailHelp" placeholder="Enter number of question ">
    <small id="emailHelp" class="form-text text-muted">
      Enter number of quesiton 
    </small>
  </div>





  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>