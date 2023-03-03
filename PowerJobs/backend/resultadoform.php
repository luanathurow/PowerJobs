<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
            if(isset($_GET['profissao'])) {
                require_once 'conexao.php';

                $profissao = $_GET['profissao'];

                $query = $conexao->prepare("SELECT profissao, universidades
                                            FROM tabela 
                                            WHERE profissao = :profissao");
                $query->bindValue(':profissao', $profissao);
                $query->execute();

                $linha = $query->fetch();

                if($linha) {
                    echo " - Profissao: {$linha['profissao']}
                          - Universidade: {$linha['universidades']}<br />";
                }
                else {
                    echo 'Nenhum usuário encontrado!';
                }
            }
        ?>
    </body>
</html>
		 
	 
	

	 
	
	 
	
	