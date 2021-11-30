
<?php

include "connection.php";
// echo "<pre>";print_r($_POST); 

// echo $_GET["id"];
// if ($_GET["id"]==16){
//     echo "test";

// }
// exit;
$id=$_GET["id"];
$name=$_POST['name'] ?? NULL;
$age=$_POST['age'] ?? NULL;
$gender=$_POST['gender'] ?? NULL;
$designation=$_POST['designation'] ?? NULL;
$hobby=$_POST['Hobby'] ?? NULL;


if(isset($_POST["update"]))

{
         
// echo "<pre>";print_r($_POST); exit;
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $designation=$_POST['designation'];
    $hobby=$_POST['hobby'];
     $sql1="UPDATE intern SET name='$name' ,age='$age' ,gender='$gender' ,designation='$designation' ,Hobby='$hobby'  WHERE id=$id";
    //  echo $sql
    //  $res = mysqli_query($conn, $sql1);
    //  var_dump(mysqli_query($conn, $sql1)); 
?>
<br>
<br>
<?php
    if (mysqli_query($conn, $sql1)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

}
?>