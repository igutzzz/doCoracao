<?php

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'] ;
    $msg = $_POST['msg'];
} else {
    echo 'falhou';
}

echo "<pre>";

echo 'O nome informado é:'.$nome.'<br>';
echo 'O email informado é:'.$email.'<br>';
echo 'A mensagem informada :'.$msg.'<br>';


var_dump($_POST);

return;

?>