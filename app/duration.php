<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

if (!isset($_SESSION['user'])) {
  $response['status'] = false;
} else {
  $conn = new PDO('mysql:host=localhost;dbname=rnd_rcrtmnt', 'root', '');
  $applicant = $_SESSION['user'];
  // get applicant id
  $stmt = $conn->prepare('SELECT date_to_end FROM applicants WHERE student_number = :sn');
  $stmt->execute(array(':sn' => $applicant));
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  $date = strtotime($result['date_to_end']);

  $response['status'] = true;
  $response['end_date'] = date('F j, Y H:i:s', $date);

}

echo json_encode($response);