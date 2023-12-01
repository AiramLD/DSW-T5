<?php
session_start();
include 'users.php';

$user = isset($_GET['user']) ? $_GET['user'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

$data_user = isset($users[$user]) ? $users[$user] : null;
if ($data_user && $data_user['password'] == $password) {
    header('Location: index.php');
    $_SESSION['level'] = $data_user['level'];
    $_SESSION['user'] = $user;
} else {
  session_destroy();
  header('Location: login.php');
}