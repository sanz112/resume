<?php


$conn = mysqli_connect('localhost', 'root', 'Witt Tech1.', 'userinput');

if(!$conn) {
    echo "connection failed:". mysqli_connect_error();
}
?>