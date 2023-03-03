<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'banco_powerjobs';

    try{
        $conexao= new PDO('mysql:host='.$servidor.';dbname='.$banco,
                        $usuario,
                        $senha);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo 'ERRO: '.$e->getMessage();
    }