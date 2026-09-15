<?php
// var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Email: " . $_POST["email"] . "<br/>";
  echo "Password: " . $_POST["password"] . "<br/>";
}
