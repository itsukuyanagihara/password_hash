<?php 
$dsn = 'mysql:dbname=password_hash;host=localhost;charset=utf8mb4';
$user = "root";
$password = "root";

if(isset($_POST)){
  // $user_name = isset($_POST['user_name'])? $_POST['user_name']:'';
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  // パスワードのハッシュ化
  $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

  
  
  try {
    $pdo = new PDO($dsn, $user, $password);

    $sql = 'INSERT INTO users(user_name, user_email, user_password) VALUES(:user_name, :user_email, :user_password)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);
    $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
    $stmt->bindValue(':user_password', $hashed_password, PDO::PARAM_STR);
    $stmt->execute();
  
  } catch (PDOException $e) {
      exit($e->getMessage());
  }
  

















}




?>