<?php

session_start();

if (isset($_SESSION['loggedIn'])) {
  echo json_encode(true);
} else {
  echo json_encode(false);
}
