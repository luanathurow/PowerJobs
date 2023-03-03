<!DOCTYPE html>
<html>
<head>
	<title>Resposta dos Dados Pessoais</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/cabecalho.css">
</head>
<body>
<?php include_once '../html/cabecalho.php';?>

<?php 
            if(isset($_GET['erro'])) {
                switch ($_GET['erro']) {
                    case 0:
                        echo '<p style="color:green;">Operação efetuada com sucesso</p>';
                        break;
                    case 1:
                        echo '<p style="color:red;">Erro ao atualizar os dados</p>';
                        break;
                    case 2:
                        echo '<p style="color:red;">Campos mal preenchidos</p>';
                        break;
                    default:
                        echo '<p style="color:red;">Erro ao efetuar a operação</p>';
                }
            } 

            require_once '../backend/conexao.php';

            $email=$_GET['email'];
            $query = $conexao->prepare("SELECT nome, sobrenome, email
                                        FROM usuario_dados_pessoais
                                        WHERE email=:email");
            $query->bindValue(':email', $email);
            $query->execute();


            while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                echo "Nome: {$linha['nome']} | Sobrenome: {$linha['sobrenome']} | E-mail: {$linha['email']}";
            }

            if(isset($_GET['profissao'])) {
                require_once '../backend/conexao.php';

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