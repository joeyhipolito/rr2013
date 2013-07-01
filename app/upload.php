<?php
session_start();
$sn = $_SESSION['user'];

if (!isset($_SESSION['user'])) {
  die(false);
}

// A list of permitted & prohibited file extensions
// $whitelist = array('png', 'jpg', 'gif','zip', 'pdf');
$whitelist = array('zip');
$blacklist = array("php", "phtml", "php3", "php4");
$uploaddir = '../uploads/';

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0) {
  $uploadfile = $uploaddir . $sn . '_' . date('Ymd') . '_' . basename($_FILES['upl']['name']);
  $ext = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

  if(!in_array(strtolower($ext), $whitelist) || in_array(strtolower($ext), $blacklist)) {
    die(false);
  }

  if(move_uploaded_file($_FILES['upl']['tmp_name'], $uploadfile)) {
    echo true;
    exit;
  }
}