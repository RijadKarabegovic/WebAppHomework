<?php
$servername = "localhost";
$names =  filter_input(INPUT_POST, 'text');
$age =  filter_input(INPUT_POST, 'rate');
$ID =  filter_input(INPUT_POST, 'ID');
if (!empty($names)){
    if(!empty($age)){
        if(!empty($ID)){
$host = "localhost";
$dbtext ="root";
$dbage ="";
$dbID ="";
$dbname ="cv db";

$conn = new mysqli($host, $dbnames, $dbage, $dbID,  $dbname)
;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    $sql = "INSERT INTO users (text, rate, ID)
    values('$names', '$age', '$ID')";
if ($conn->query($sql) === TRUE) {
    echo "New record is inserted sucessfully";
} else {
    echo "Error : " . $conn->error;
}
$conn->close();
}

} else {
            echo "ID should not be empty";
            die();
        }
            }else {
        echo "Age should not be empty";
        die();
    }
}else {
    echo "Name should not be empty";
    die();
}

// Create database
$sql = "CREATE DATABASE mytable";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully ";
} else {
    echo "Error creating database: " . $conn->error;
}

?>