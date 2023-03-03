<!DOCTYPE html>
<html>
  <head>
    <title>PowerJobs</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="../CSS/entrar.css">
  <link rel="stylesheet" href="../CSS/entrar.css">
	<link rel="stylesheet" href="../css/cabecalho.css">

  </head>
  <body>
    <?php include_once 'cabecalho.php';?>

    <form id="id_formulario" action="pagina_inicial.html" method="post">
            <fieldset>

      <label for="id_usuario">Usuário</label><br/>
      <input id="id_usuario"
             placeholder="usuário"
             type="text"
             name="usuario"
             required />
      <br/>
      <label for="id_senha">Senha</label><br/>
             <input id="id_senha"
             placeholder="senha"
             type="password"
             name="senha"
             required />
                   <fieldset>
      <input type="submit" value="Entrar" id="in-submit"> <input type="button" value="Voltar" id="in-button" onClick="history.go(-1)">
    </form>

  </body>
</html>
