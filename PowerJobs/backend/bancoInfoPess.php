<?php
require_once 'conexao.php';
if(isset($_POST['nome'])&&isset($_POST['sobrenome'])&&isset($_POST['email'])){
    if(empty($_POST['nome'])&&empty($_POST['sobrenome'])&&empty($_POST['email'])){
        header("Location: cadastro.php?erro=2");
    }
    else{
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuario_dados_pessoais (nome, sobrenome, email)
                    VALUES (:nome, :sobrenome, :email)";
        $query = $conexao->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':sobrenome', $sobrenome);
        $query->bindValue(':email', $email);

        try {
            $query->execute();
            header("Location: ../html/cadastro2.php?email=".$email);
        } catch (Exception $ex) {
            header("Location: cadastro.php?erro=1");
        }
    }  
}
else {
    header("Location: cadastro.php?erro=2");
}