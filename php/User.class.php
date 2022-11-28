<?php

class User {
    public $nome;
    public $email;

    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    function getNome(){
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

}