<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "Advisory_System";


 if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
 {
    die("failed to connect")
 }