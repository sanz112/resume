<?php
include 'form/conn.php';
if (isset($_POST['submit'])) {
session_start();
$_SESSION['uid'] = $row['id'];
session_unset();
session_destroy();
header("Location: ../resume/form/form.php");
exit();
}
?>