<?php
session_start();

$sn = isset($_POST['sn']) ? $_POST['sn'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;

$today = date("Y-m-d H:i:s");

// target submission 
// 
// e.g.
// echo $today . '<br>';
// echo date("Y-m-d H:i:s", strtotime($today. ' + 7 days'));


$conn = new PDO('mysql:host=localhost;dbname=rnd_rcrtmnt', 'root', '');
$stmt = $conn->prepare('SELECT * FROM applicants WHERE student_number = :sn AND password = :pwd');
$stmt->execute(array(':sn' => $sn, ':pwd' => md5($pwd)));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$division_id = $result['division'];
$student_id = $result['id'];

if ($result['status'] == 0) {
  // get duration via division_id
  $stmt = $conn->prepare('SELECT duration FROM exams WHERE division = :id');
  $stmt->execute(array(':id' => $division_id));
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  $duration = $result['duration'];

  // update date_started field of the applicant the duration plus datetime today to 
  $date_to_end = date("Y-m-d H:i:s", strtotime($today. ' + ' . $duration . ' days'));
  $stmt = $conn->prepare('UPDATE applicants SET date_to_end = :end_date, status = 1 WHERE id = :applicant_id');
  $stmt->execute(array(':end_date' => $date_to_end, ':applicant_id' => $student_id));

}

if ($student_id > 0) {
  $_SESSION['user'] = $sn;
  $_SESSION['loggedIn'] = true;
  echo json_encode(true);
}