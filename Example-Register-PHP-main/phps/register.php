<?php 
include "conn.php";

$dbUserName = $_POST['Username'];
$dbFirstName = $_POST['firstName'];
$dbMiddleName = $_POST['middleName'];
$dbLastName = $_POST['lastName'];
$dbStudentNumber = $_POST['studentNumber'];
$dbDateOfBirth = $_POST['dateOfBirth'];
$dbCourse = $_POST['course'];
$dbSection = $_POST['section'];
$dbEmail = $_POST['email'];
$dbPassword = $_POST['password'];



$insertStmt = $conn->prepare("INSERT INTO `registration` (`Username`, `firstName`, `middleName`, `lastName`, `studentNumber`, `dateOfBirth`, `course`, `section`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$insertStmt->bind_param('ssssssssss', $dbUserName, $dbFirstName, $dbMiddleName, $dbLastName, $dbStudentNumber, $dbDateOfBirth, $dbCourse, $dbSection, $dbEmail, $dbPassword);
$insertStmt->execute();

echo "<Script>
    alert(\"Registered Successfully\");
    window.location.href = '../index.php';
</script>";

$conn->commit();
?>