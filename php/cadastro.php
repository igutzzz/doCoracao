<?php

require_once('connect.php');

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = md5($_POST['Senha']);

$sql = 'SELECT * FROM usuarios WHERE email=:email AND senha=:senha';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'senha' => $senha]);
$user = $result->fetch();

if($user == false) {
    $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $email, $senha]);
    echo 'Usuário cadastrado!';
} else {
    echo 'Usuário já cadastrado!';
}

?>