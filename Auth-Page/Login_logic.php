<?php
include "db_connection.php";
if(isset($_Post['submit'])) {
    $name=$_Post['name'];
    $password =$_Post['password'];
}