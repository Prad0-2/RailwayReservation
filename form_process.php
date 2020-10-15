<?php

$adultErr = $childErr = $selectErr = $dateErr = "";
$adult = $child = $select = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["date"])) {
    alert('Please enter the date!');
    } else {
      $date = test_input($_POST["date"]);
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["adult"])) {
    $adultErr = "Number of adult passenger is required!";
  } else {
    $adult = test_input($_POST["adult"]);
  }

  if (empty($_POST["child"])) {
    $childErr = "Number of child passenger is required!";
  } else {
    $child = test_input($_POST["child"]);
  }

  if (empty($_POST["select"])) {
    $selectErr = "the class cannot be empty!";
  } else {
    $select = test_input($_POST["child"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function alert($string)
  {
      echo "javascript:alert('$string');";
  }
}
?>