<?php
include '../Config/DataBase.php';
require_once '../controller/midia-create.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Midia</title>
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
                <a href="TelaCRUD.php">
                <i class="fa-sharp-duotone fa-solid fa-pen-to-square" style="--fa-primary-color: #ff7b00; --fa-secondary-color: #5979b1;"></i>
                </a>
            </button>

        </div>]
    </div>

    <div class="meio">
        <h1 class="titulo">
            Qual midia você gostaria de adicionar?
        </h1>

        <button class="midiaPergunta" name="Filme">
            <a href="TelaFormularioFilme.php">Filme</a>
        </button>
        <button class="midia" name="Serie">
            <a href='TelaFormularioSerie.php'>Serie</a>
        </button>
    </div>

    <div class="sidebarRight"></div>
    <div class="rodape">
        <p class="rodape">Todos os direitos reservados - 2025</p></div>
    </div>

</body>

</html>