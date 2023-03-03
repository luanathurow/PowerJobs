<!DOCTYPE php>
<php>
  <head>
    <title>PowerJobs</title>
    <link rel="stylesheet" href="../css/cadastro-style.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
  </head>
  <body>

  <?php include "cabecalho.php"?>
    <!--FORMULÁRIO-->
    <form id="id_form_cadastro" action="../backend/bancoInfoProf.php?email=<?php echo $_GET['email']?>" method="post">
            <fieldset>
        <legend>Informações Profissionais</legend>
        <div class="areaFormulario">
          <label for="id_profissao">Profissão</label><br/>
          <select name="profissao">
            <option>Selecionar</option>
            <option value="Historia">História</option>
            <option value="Economia">Economia</option>
            <option value="EngenhariaRobos">Engenharia de Rôbos</option>
            <option value="Fisica">Física</option>
          </select>
          <br/>
        </div>
        <div class="areaFormulario">
          <label for="id_universidade">Universidade</label><br/>
          <select name="universidade">
            <option>Selecionar</option>
            <option value="FEI">FEI</option>
            <option value="Mackenzie">Mackenzie</option>
            <option value="UFPE">UFPE</option>
            <option value="UFPEL">UFPEL</option>
            <option value="UFRGS">UFRGS</option>
            <option value="UFRJ">UFRJ</option>
            <option value="ULBRA">ULBRA</option>
            <option value="UNICAMP">UNICAMP</option>
            <option value="UNISINOS">UNISINOS</option>
          </select>
          <br/>
        </div>
       
      </fieldset>

      
      <input type="submit" value="Próximo"> <input type="button" value="Voltar" onClick="history.go(-1)">
    </form>
  </body>
</php>
