<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once('../php/includes/links-header.php');?>
    <title>Aba Ybyra - Aluno</title>
</head>

<body>
    
    <header>
      <nav id="header" class="top-container navbar navbar-dark navbar-expand-md bg-success">
        <a class="display-4" href="#">Aluno</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbar" aria-controls="conteudoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="conteudoNavbar" class="collapse navbar-collapse justify-content-end">
          <div class="nav-container navbar-nav justify-content-between w-50">
              <a href="../index.php" class="header-icon nav-item nav-link">INÍCIO</a>
              <a href="#" class="header-icon nav-item nav-link">SOBRE</a>
              <a href="#" class="header-icon nav-item nav-link">BLOG</a>
              <a href="#" class="header-icon nav-item nav-link">CONTATO</a>
          </div>
        </div>
        </nav>
    </header>
    
    <main>
     <div id="aluno-body" class=" row w-100">
        <div id="lateral-aluno" class="bg-success col-sm-3 col-lg-2 h-100 d-flex flex-column justify-items-center align-items-center">
          <nav id="menu-alunos" class="h-100 nav text-light d-flex flex-column align-items-start justify-content-center">
            
              <div class="nav-item w-100">
                <div class="nav-link h4" type="button" data-toggle="collapse" data-target="#historias-itens" aria-controls="historias-itens" aria-haspopup="true" aria-expanded="false" aria-label="modulos da história">
                  Histórias
                </div>
                  <div id="historias-itens"  class="collapse">
                    <div class="d-flex flex-column align-items-center">
                    <a class="nav-item text-white" href="#historia" onclick="showModulo(1)">Módulo 1</a>
                    <a class="nav-item text-white" href="#modulo2" onclick="showModulo(2)">Módulo 2</a>
                    <a class="nav-item text-white" href="#modulo3" onclick="showModulo(3)">Módulo 3</a>
                  </div>
                </div>
              </div>
              <div class="nav-item">
                
                <div class="nav-link h4" type="button" data-toggle="collapse" data-target="#exercicios-itens" aria-controls="historias-itens" aria-haspopup="true" aria-expanded="false" aria-label="modulos da história">
                Exercícios
                </div>
                  <div id="exercicios-itens"  class="collapse">
                    <div class="d-flex flex-column align-items-center">
                    <a class="nav-item text-white" href="#">Módulo 1</a>
                    <a class="nav-item text-white" href="#">Módulo 2</a>
                    <a class="nav-item text-white" href="#">Módulo 3</a>
                  </div>
                </div>
              </div>
          </nav>
        </div>

        <div id="conteudo">
          <h2 id="modulo0">Bem vindo, aluno! Se divirta muito.</h2>
          <div id="modulo1" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
            <button type='button' id="previous" class="col-1 "  onclick="outraImagem(-1)">
              <img src="../images/previous.png" alt="cartão anterior">
            </button>


            <div id="card" class="col-10 my-lg-3 d-flex align-items-center justify-content-center ">
              <img id="primeira-imagem" class="img-historia border" src="../images/mod1-hist-card1.png" alt="cartao 1 historia modulo 1">
              <img class="img-historia border" src="../images/mod1-hist-card2.png" alt="cartao 2 historia modulo 1">
              <img class="img-historia border" src="../images/mod1-hist-card3.png" alt="cartao 3 historia modulo 1">
              <img class="img-historia border" src="../images/mod1-hist-card4.png" alt="cartao 4 historia modulo 1">
              <img class="img-historia border" src="../images/mod1-hist-card5.png" alt="cartao 5 historia modulo 1">

            </div>


            <button type='button' id="next" class="col-1" onclick="outraImagem(1)">
              <img src="../images/next.png" alt="próximo cartão">
            </button>
          </div>
          <div id="modulo2" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
            <h2>Módulo 2 disponível em breve</h2>
          </div>
          <div id="modulo3" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
            <h2>Módulo 3 disponível em breve</h2>
          </div>
        </div>

      </div>




    </main>
    
    <?php 
      require_once("../php/includes/footer2.php");
      require_once("../php/includes/links-body.php");
    ?>
</body>

</html>