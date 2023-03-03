<?php 
require_once 'conexao.php';
if(isset($_POST['profissao']) && isset($_POST['universidade'])) {
    if(empty($_POST['profissao']) || empty($_POST['universidade'])) {
        header("Location: cadastro.php?erro=2");
    }
    else {
        $profissao = $_POST['profissao'];
        $universidade = $_POST['universidade'];
        $email = $_GET['email'];
       
        
        $sql = "INSERT INTO tabela (profissao,universidades, email) 
                VALUES (:profissao, :universidades, :email)";

        $query = $conexao->prepare($sql);
        $query->bindValue(':profissao', $profissao);
        $query->bindValue(':universidades',$universidade);
        $query->bindValue(':email',$email);
        

        try {
            $query->execute();
            header("Location: ../html/destino.php?profissao=".$profissao."&email=".$email);
        } catch (Exception $ex) {
			echo 'ERRO: ' . $e->getMessage();
            // header("Location: cadastro.php?erro=1");
        } 
    }
}
else {
    header("Location: cadastro.php?erro=2");
}


