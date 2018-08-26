<?php
include 'conn.php';
session_start();
?>
<?php

if (isset($_POST['submit'])) {

$password = mysqli_real_escape_string($conn, $_POST["password"]);


$sql= "SELECT * FROM `userinput`  WHERE password='$password'";
$query= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query); 

if($row == 0) {
   header('Location: form.php');
} else {
    if ($password === "myform") {
        if (isset($_POST['submit'])) {
            $_SESSION['uid'] = $row['id'];
        header('Location: ../index.php');
        }
  
    } else {
        header('Location: form.php');
    }
}
}
?>




