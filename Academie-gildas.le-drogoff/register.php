<?php
require  'app' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'User.php';

function sanitize_mail($email): string
{
  $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
  return htmlentities($email);
}
$email = sanitize_mail($_POST['email'] ?? '');
$user = new User();
$name = htmlspecialchars($_POST['name']);
$mdp = htmlspecialchars($_POST['mdp']);
$day = htmlspecialchars($_POST['day']);
$month = htmlspecialchars($_POST['month']);
$year = htmlspecialchars($_POST['year']);
$birthdate = $year . '-' . $month . '-' . $day;
$password = hash('ripemd160', $mdp . 'vive le projet tweet_academy');
$user->register($name, $email, $password, $birthdate);
header('Location: ./index.php');
