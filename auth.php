<?php
session_start();

// инициализируем переменные
$username = "";
$name    = "";
$day = "";
$month ="";
$year ="";
$datee ="";
$errors = array();
$msg = "";

$months = array(
  "January" => '01',
  "February" => '02',
  "March" => '03',
  "April" => '04',
  "May" => '05',
  "June" => '06',
  "July" => '07',
  "August" => '08',
  "September" => '09',
  "October" => '10',
  "November" => '11',
  "December" => '12'
);


$id = 12;

// подключаемся к бд
$db = mysqli_connect('localhost', 'root', '', 'users');
$dm = mysqli_connect('localhost', 'root', '', 'message');

// Регистрируем юзера
if (isset($_POST['submit_reg'])) {
  // заносим данные в переменные
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $availibal = mysqli_real_escape_string($db, $_POST['month']);
  $month = $months[$availibal];
  $datee = $year.$month.$day;

  // Проверка, что форма заполнена
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // Проверка на юзера с таким же username
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";// проверка
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // Если юзер с таким username уже существует
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Регистрируем
  if (count($errors) == 0) {
  	$password = md5($password);//шифруем пароль )

  	$query = "INSERT INTO users (username, name, password, datee)
  			  VALUES('$username', '$name', '$password', '$datee')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    //------------------------------------
  	header('location: index.php');
  }
}

// Авторизация
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
    $query = "INSERT INTO users (username, name, password, datee)
  			  VALUES('$username', '$name', '$password', '$datee')";
  	$results = mysqli_query($db, $query);

  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: menu.php');
  
  }
}


if (isset($_POST['tweet_submit'])) {
  $msg = mysqli_real_escape_string($dm, $_POST['input_tweet']);

  if (empty($msg)) {
  	array_push($errors, "Message is empty");
  }

  if (count($errors) == 0) {
    $query = "INSERT INTO message (id, username, msg)
          VALUES('$id', '$username', '$msg')";
  	$results = mysqli_query($dm, $query);
    header('location: menu.php');
  }
}




?>
