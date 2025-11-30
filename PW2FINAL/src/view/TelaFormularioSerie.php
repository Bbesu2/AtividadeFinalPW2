<?php
  session_start();
  require_once("../Config/DataBase.php");

  require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../model/FilmeModel.php';
require_once __DIR__ . '/../model/SerieModel.php';
require_once __DIR__ . '/../controller/midia-create.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 $episodio = isset($_POST['episodio']) ? (int)$_POST['episodio'] : null;

$serie = new SerieModel(
    $_POST['nome'],
    $_POST['genero'],
    $_POST['anoLanc'],
    $_POST['sinopse'],
    $_POST['clasInd'],
    $_POST['tipo'],
    $episodio
);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="fundo">
        <div class="topo">

            <button class="navPage">
                <a href="TelaInicial.php">
                <i class="fa-solid fa-house"></i>
                </a>
            </button>
            <button class="navPage">
                <a href="TelaAdicionarMidia.php">
            <i class="fa-solid fa-plus"></i>
            </a>
            </button>

            <button class="navPage">
                <a href="TelaCrud.php">
                <i class="fa-sharp-duotone fa-solid fa-pen-to-square" style="--fa-primary-color: #ff7b00; --fa-secondary-color: #5979b1;"></i>
                </a>
            </button>

        </div>

        <div class="meio">

           
               <div class="Fundoformulario">
            <div class="forumlario">
                      <form action="" method="post">
                        <input type="hidden" name="acao" value="adicionar">

                        <div class="forms">
                            <label>Nome</label>
                            
                            <input type="text" name="nome" id="nome">
                        </div>
                        <div class="forms">
                            <label>Genero</label>
                            
                            <select name="genero" required>
                                <option value="Romance">Romance</option>
                                <option value="Ação">Ação</option>
                                <option value="Comédia">Comédia</option>
                                <option value="Animação">Animação</option>
                                <option value="Terror">Terror</option>
                                <option value="Ficção">Ficção</option>
                                <option value="Aventura">Aventura</option>
                                <option value="Musical">Musical</option>
                                <option value="Suspense">Suspense</option>
                                <option value="Documentario">Documentario</option>
                            </select>
                        </div>
                        <div class="forms">
                            <label>Sinopse</label>
                            
                            <input type="text" name="sinopse" required></textarea>
                        </div>
                        <div class="forms">
                            <label>Classifcaçao</label>
                            
                            <select name="clasInd" required>
                                <option value="Livre">Livre</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </div>
                        <div class="forms_anolanc">
                            <labrel>Ano de lançamento</labrel>
                            <input type="number" min="1940" maxlength="4" name="anoLanc" id="anoLanc">
                        </div>
                        <div class="forms">
                            <label>Tipo</label>
                            
                            <select name="tipo" id="tipo" required>
                                <option disabled value="Filme">Filme</option>
                                <option value="Serie">Série</option>
                            </select>
                    </div>
                    <div class="forms">
                        <label>Episodios</label>
                        
                        <input type="text" name="episodios" id="episodios">
                    </div>
                    <div>
                       <br>
                      <div class="botoes"> <br>
                            <button class="enviar" type="submit">Enviar</button>
                              <br>
                            <button class="limpar" type="reset">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>

        <div class="sidebarRight"></div>
        <div class="rodape">
            <p class="rodape">Todos os direitos reservados - 2025</p>
        </div>
    </div>

</body>
</html>

