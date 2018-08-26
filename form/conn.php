<?php
$url = getenv('
mysql://go6qc538216kmr69:m8hvtk2fo5l5i1qv@sulnwdk5uwjw1r2k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/pgkyawhr0bkj5mno');
$dbparts = parse_url($url);

$hostname = $dbparts['sulnwdk5uwjw1r2k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['go6qc538216kmr69'];
$password = $dbparts['m8hvtk2fo5l5i1qv'];
$database = ltrim($dbparts['pgkyawhr0bkj5mno'],'/');

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn) {
    echo "connection failed:". mysqli_connect_error();
}
?>