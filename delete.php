<?php

include "connection.php";
$id=$_GET["id"];
$sql= "DELETE FROM `intern` WHERE id=$id ";
mysqli_query($conn, $sql);
?>

<script type=text/javascript>
window.location="index.php";
</script>
