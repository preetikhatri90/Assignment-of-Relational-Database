<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interns";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  // echo "connected";
}

// sql to create table
// $sql = "CREATE TABLE  Intern(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// age INT(3) NOT NULL, gender VARCHAR(10) NOT NULL,
// designation VARCHAR(50), Hobby TEXT(200),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table Intern created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }


// $insertquery= "INSERT INTO intern( name, age, Gender, designation, Hobby)
// VALUES ('james', '12', 'male', 'repoter', 'playing')";
// mysqli_query($conn, $insertquery);

// $updatequery= "UPDATE intern SET name='Alfred Schmidt', age = '55', Hobby = 'Frankfurt'
// WHERE id = 1";
// mysqli_query($conn, $updatequery);



//$selectquery="SELECT * FROM intern WHERE gender = 'female' AND ORDER BY name";

// mysqli_query($conn, $selectquery);


// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result =  mysqli_query($conn, $selectquery);
// // die($conn->error);
// if($result){
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Age:" . $row["age"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }


// }

// else{
//   echo "Error in ".$selectquery."<br>";
    

// }


// $conn->close();



?>