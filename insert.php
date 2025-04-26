<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no= $_POST['roll_no'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $dob=  $_POST['dob'];


    $sql = "INSERT INTO student (roll_no, name, email, department, gender, dob) VALUES ('$roll_no', '$name', '$email', '$department', '$gender', '$dob')";

    if ($conn->query($sql) === TRUE) {
        echo "Student Record added  successfully. <a href='display.php'>View Students</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();