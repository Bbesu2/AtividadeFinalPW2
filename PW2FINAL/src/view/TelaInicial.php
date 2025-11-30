<?php
require_once __DIR__ . '/../config/DataBase.php';
require_once __DIR__ . '/../model/FilmeModel.php';
require_once __DIR__ . '/../model/SerieModel.php';
require_once __DIR__ . '/../controller/midia-read.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela inicial</title>
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

            <div class="carrosel">
                <div class="grupo">
                    <div class="fotos"></div>
                </div>
            </div>

            <div class="baixo">
                <div class="carrosselMidiasDB">
                    <div class="grupo">
                        <div class="midias">1</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebarRight"></div>
        <div class="rodape">
            <p class="rodape">Todos os direitos reservados - 2025</p>
        </div>
    </div>

</body>







<

</html>