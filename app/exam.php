<?php
header('Content-Type: application/json; charset=utf-8');
header('Content-Type: text/html; charset=ISO-8859-15');
session_start();

$response = array();

if (!isset($_SESSION['user'])) {
  $response['status'] = false;
} else {
  $conn = new PDO('mysql:host=localhost;dbname=rnd_rcrtmnt', 'root', '');
  $applicant = $_SESSION['user'];
  // get applicant id
  $stmt = $conn->prepare('SELECT * FROM applicants WHERE student_number = :sn');
  $stmt->execute(array(':sn' => $applicant));
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  $division_id = $result['division'];

  if ($division_id == 1)
    $division = 'web';
  else if ($division_id == 2)
    $division = 'sys';
  else if ($division_id == 3)
    $division = 'multi';
  else if ($division_id == 4)
    $division = 'train';
  else if ($division_id == 5)
    $division = 'docu';

  $response = array('status' => true, 'division' => $division);

  // // get examination content via division_id
  // $stmt = $conn->prepare('SELECT content FROM exams WHERE division = :id');
  // $stmt->execute(array(':id' => $division_id));
  // $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

echo json_encode($response);