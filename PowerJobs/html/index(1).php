<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PowerJobs</title>
    <link rel="stylesheet" href="../css/index-style.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
  </head>
  <body>
    <?php include_once 'cabecalho.php';?>

    <!--Pesquisa-->
    <form id="formBusca" method="get" action="index.html">
        <input id="txtBusca" type="text" placeholder="Pesquisa..." required/>
        <button type="submit" id="btBusca" value="busca">🔍</button>
    </form>

    <!--Profissões ligadas a informática-->
    <div class="container">
      <p class="area"><strong>Informática</strong></p>
      <div class="wall w1-1" id="w1-1">
        <a href="#w1-2"><div class="seta-left"></div></a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/EngSoft.jpg">
          <p class="txtProf">Engenheiro de Software</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/AnaliSegInfo.jpg">
          <p class="txtProf">Analista de Segurança de Informação</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/AdmBD.jpg">
          <p class="txtProf">Administrador do Banco de Dados</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/AnaliSist.jpg">
          <p class="txtProf">Analista de Sistemas</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/ArqRedes.jpg">
          <p class="txtProf">Arquiteto de Redes de Informática</p>
        </a>
        <a href="#1-2"><div class="seta-right"></div></a>
      </div>

      <div class="wall w1-2" id="w1-2">
        <a href="#w1-1"><div class="seta-left"></div></a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Informatica/ProgJogDig.jpg">
          <p class="txtProf">Programador de jogos digitais</p>
        </a>
        <a href="#w1-1"><div class="seta-right"></div></a>
      </div>
    </div>

    <!--Profissões ligadas a Artes e Design-->
    <div class="container">
      <p class="area"><strong>Artes e Design</strong></p>
      <div class="wall w2-1" id="w2-1">
        <a href="#w2-3"><div class="seta-left"></div></a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/ArqUrba.jpg">
          <p class="txtProf">Arquitetura e Urbanismo</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/ArtVis.jpg">
          <p class="txtProf">Artes Visuais</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/ComArtCorp.jpg">
          <p class="txtProf">Comunicação das Artes do Corpo</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Danca.jpg">
          <p class="txtProf">Dança</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Design.jpg">
          <p class="txtProf">Design</p>
        </a>
        <a href="#w2-2"><div class="seta-right"></div></a>
      </div>

      <div class="wall w2-2" id="w2-2">
        <a href="#w2-1"><div class="seta-left"></div></a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/DesiGames.jpg">
          <p class="txtProf">Design de Games</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/DesiInter.jpg">
          <p class="txtProf">Design de Interiores</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/DesiModa.jpg">
          <p class="txtProf">Design de Moda</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Fotog.jpg">
          <p class="txtProf">Fotografia</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Anim.jpg">
          <p class="txtProf">Animação</p>
        </a>
        <a href="#w2-3"><div class="seta-right"></div></a>
      </div>

      <div class="wall w2-3" id="w2-3">
        <a href="#w2-2"><div class="seta-left"></div></a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/JogDig.jpg">
          <p class="txtProf">Jogos Digitais</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Mus.jpg">
          <p class="txtProf">Música</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/ProdCen.jpg" height="100" width="100">
          <p class="txtProf">Produção Cênica</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/ProdFon.jpg">
          <p class="txtProf">Produção Fonográfica</p>
        </a>
        <a href="EngSoft" class="text-imag">
          <img src="../imagens/Artes_e_Design/Teat.jpg">
          <p class="txtProf">Teatro</p>
        </a>
        <a href="#w2-1"><div class="seta-right"></div></a>
      </div>
    </div>
  </body>
</html>
