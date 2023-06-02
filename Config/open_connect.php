<?php
$connect = mysqli_connect('us-cdbr-east-06.cleardb.net','b26a5ed2fb2d40','45cd74a1','heroku_958b3bd01c82c79');
mysqli_set_charset($connect,'utf8');
if(!$connect){
    die("Could not connect to server".mysqli_connect_error());
}
// else{
//     die("connect to server".mysqli_connect_error());
// }
?>