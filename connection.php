<?php

// Variables are like a container which can store data which can be accessed anwhere in the file. 
// Defining host Variables
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "hellodb";

//connection to database
//msqli is a database driver which is used to connect php to database to execute queries, retrieve data etc.
//mysqli fullform is mysql improved.
$conn = new mysqli($servername, $username, $password, $databasename, 3307);


// connection error or success 
// the -> is an object operator used to access methods
if ($conn->connect_error) {
    //this line kills the connection if found an error and display it in the browser
    die("Connection Failed" . $conn->connect_error);
}
//if connection successfull the below code executes
echo "";


// good practise to close the connection because if connection is open it can take resources, performance and memory.
// Also it might create security vulnerebilities if any sensitive data and not handled propertly. 
// $conn->close();
