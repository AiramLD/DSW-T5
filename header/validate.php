<?php
$user = "pepe";
$password = "1234";

//echo "Debe fallar el header";
if ($user == $_POST['user'] && $password==$_POST['password']) {
  header('Location: login.html');
} else {
  header('Location: logout.html');
}