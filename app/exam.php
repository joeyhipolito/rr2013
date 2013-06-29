<?php
header('Content-Type: text/html; charset=ISO-8859-15');
session_start();

if (!isset($_SESSION['user'])) {
  die('Logged Out!');
}

$conn = new PDO('mysql:host=localhost;dbname=rnd_rcrtmnt', 'root', '');

$applicant = $_SESSION['user'];
// get applicant id
$stmt = $conn->prepare('SELECT * FROM applicants WHERE student_number = :sn');
$stmt->execute(array(':sn' => $applicant));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$division_id = $result['division'];

// get examination content via division_id
$stmt = $conn->prepare('SELECT * FROM exams WHERE division = :id');
$stmt->execute(array(':id' => $division_id));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo $result['content'];