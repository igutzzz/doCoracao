<?php

require_once('connect.php');
require_once('User.class.php');

$email = $_POST['Email'];
$senha = md5($_POST['Senha']);

$sql = 'SELECT * FROM usuarios WHERE email=:email AND senha=:senha';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'senha' => $senha]);
$user = $result->fetch();
$usuario = new User($user['nome'], $user['email']);

if(!isset($_SESSION)) {
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $usuario->getNome();
    $_SESSION['email'] = $usuario->getEmail();

    header("Location: ../perfil.php");

}