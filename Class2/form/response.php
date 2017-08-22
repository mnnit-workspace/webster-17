<?php

$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);


    $gender = test_input($_POST["gender"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>