<?php

session_start();

$sn = isset($_POST['sn']) ? $_POST['sn'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;

$conn = new PDO('mysql:host=localhost;dbname=rnd_rcrtmnt', 'root', '');
$stmt = $conn->prepare('SELECT id FROM applicants WHERE student_number = :sn AND password = :pwd');
$stmt->execute(array(':sn' => $sn, ':pwd' => md5($pwd)));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result > 0) {
  $_SESSION['user'] = $sn;
  $_SESSION['loggedIn'] = true;
  echo json_encode(true);
}