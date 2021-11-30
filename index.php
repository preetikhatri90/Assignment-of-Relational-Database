
<?php
include "connection.php";
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
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

<form action="" method="POST">
  <div class="form-group">
    <label for="name"> Full name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>

  <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="radio"  name="gender" value="female" checked >
    <label for="Female">Female</label>
    <input type="radio"  name="gender" vasssue="male" >
    <label for="Male">Male</label><br>
  </div>

  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" class="form-control" name="designation" required>
  </div>

  <div class="form-group">
    <label for="Hobby">Hobby:</label>
    <input type="text" class="form-control"  name="hobby" required>
  </div>


  <div class="checkbox col-sm-offset-2 col-sm-8">
    <label><input type="checkbox"> Remember me</label>
  </div>


  <div class="form-group">
      <div class="col-sm-offset-0 col-sm-8">
        <button type="submit" class="btn btn-default" name="insert"> Insert</button>
         </div>
    </div>
  </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="col-lg-12 ">
<table class="table ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Age </th>
      <th scope="col">Gender</th>
      <th scope="col">Designation</th>
      <th scope="col">Hobby</th>
      <th scope="col">reg. time</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>

  </thead>
  <tbody>
    <tr>
    <?php
        $displayquery= "SELECT * FROM intern";
    $res=mysqli_query($conn, $displayquery);
    while($row =mysqli_fetch_array($res)){
      echo "<tr>";
      echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["name"]; echo "</td>";
      echo "<td>"; echo $row["age"]; echo "</td>";
      echo "<td>"; echo $row["gender"]; echo "</td>";
      echo "<td>"; echo $row["designation"]; echo "</td>";
      echo "<td>"; echo $row["Hobby"]; echo "</td>";
      echo "<td>"; echo $row["reg_date"]; echo "</td>";
      echo "<td>"; ?> 
      
      <a href = "edit.php?id= <?php echo $row["id"]; ?>"> <button type="submit" class="btn btn-dark" name="update">update</button>
    </a>  <?php echo "</td>";
      echo "<td>"; ?> 
      <a href = "delete.php?id= <?php echo $row["id"]; ?>"> <button type="submit" class="btn btn-danger" name="delete">delete</button>
      </a> <?php echo "</td>";
     
    }
?>
    </tr>
    
  </tbody>
</table>
</div>
</body>





<?php

if(isset($_POST["insert"])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $designation=$_POST['designation'];
    $hobby=$_POST['hobby'];


    $insertquery= "INSERT INTO intern( name, age, Gender, designation, Hobby)
    VALUES ('$name', '$age', ' $gender', '$designation', '$hobby')";
    // mysqli_query($conn, $insertquery);
   $res= mysqli_query($conn, $insertquery);
   ?>

   <script type="text/javascript">
      window.location.href=window.location;
  
  </script>

   <?php
   
    
   
}
  



?>



</html>

