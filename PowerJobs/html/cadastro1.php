<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PowerJobs</title>
    <link rel="stylesheet" href="../css/cadastro-style.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
  </head>
  <body>
    <?php include_once 'cabecalho.php';?>

    <!--FORMULÁRIO-->
    <form id="id_form_cadastro" action="../backend/bancoInfoPess.php" method="post">
      <fieldset>
        <legend>Dados Pessoais</legend>
        <div class="areaFormulario">
          <label for="id_nome">Nome</label><br/>
          <input id="id_nome"
                  placeholder="Digite seu primeiro nome"
                  type="text"
                  name="nome"
                  required/>
          <br/>
        </div>
        <div class="areaFormulario">
          <label for="id_sobrenome">Sobrenome</label><br/>
          <input id="id_sobrenome"
                  placeholder="Digite seu sobrenome"
                  type="text"
                  name="sobrenome"
                  required/>
          <br/>
        </div>
        <div class="areaFormulario">
          <label for="id_email">E-mail</label><br/>
          <input id="id_email"
                  placeholder="Digite o seu melhor e-mail"
                  type="email"
                  name="email"
                  required/>
        <br/>
      </div>
      </fieldset>
      <input type="submit" value="Próximo"> <input type="button" value="Voltar" onClick="history.go(-1)">
    </form>
  </body>
</html>
