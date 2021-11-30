<?php

include "connection.php";
$id=$_GET["id"];
$name="";
$age="";
$gender="";
$designation="";
$Hobby="";
$sql= "select * from intern where id=$id";

$res=mysqli_query($conn, $sql);
while ($row= mysqli_fetch_array($res)){
    $name= $row["name"];
    $age= $row["age"];
    $gender= $row["gender"];
    $designation= $row["designation"];
    $Hobby= $row["Hobby"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  

<form action="update.php?id=<?php echo $id;?>"method="POST">
  <div class="form-group ">
    <label for="name"> full name:</label>
    <input type="text" class="form-control" id="name" name="name"  value= "<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age" value= "<?php echo $age; ?>">
  </div>

  <div class="form-group">
    <label for="gender">Gender:</label>
    
    <input type="radio"  name="gender" value="female"  <?php  echo $gender == 'female' ?  'checked'  : ''; ?> >
    <label for="Female">Female</label>
    <input type="radio"  name="gender" value="male" <?php  echo $gender == 'male' ?  'checked'  : ''; ?> >
    <label for="Male">Male</label><br>
    
  </div>

  <div class="form-group">
    <label for="designation">Designation: </label>
    <input type="text" class="form-control" name="designation" value= "<?php echo $designation; ?>" >
  </div>

  <div class="form-group">
    <label for="Hobby">Hobby:</label>
    <input type="text" class="form-control"  name="hobby"  value= "<?php echo $Hobby; ?>">
  </div>


  
  <div class="form-group">
    
  

      <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default" name="update">update</button>
       </div>
    </div>
  </form>
</body>



</html>