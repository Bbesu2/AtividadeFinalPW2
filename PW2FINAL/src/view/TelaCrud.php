<?php
require_once __DIR__ . '/../config/DataBase.php';
require_once __DIR__ . '/../model/FilmeModel.php';
require_once __DIR__ . '/../model/SerieModel.php';
require_once __DIR__ . '/../controller/midia-read.php';
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

<!doctype html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de edicao</title>
    <link rel="stylesheet" href="style.css">


    <!-- Incluir o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                    <i class="fa-sharp-duotone fa-solid fa-pen-to-square"
                        style="--fa-primary-color: #ff7b00; --fa-secondary-color: #5979b1;"></i>
                </a>
            </button>

        </div>

    <?php
$sql = "SELECT id, imagem FROM slides WHERE situacao_id = 1";
$result = $conn->query($sql);

$slides = [];
while ($row = $result->fetch_assoc()) {
    $slides[] = $row;
}
$total = count($slides);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">



  <!-- Indicadores -->
  <div class="carousel-indicators">
    <?php for ($i = 0; $i < $total; $i++): ?>
      <button type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="<?php echo $i; ?>"
        class="<?php echo $i === 0 ? 'active' : ''; ?>"
        aria-label="Slide <?php echo $i + 1; ?>"></button>
    <?php endfor; ?>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <?php foreach ($slides as $index => $row_slide): ?>
      <?php $ativo = ($index === 0) ? 'active' : ''; ?>
      <div class="carousel-item <?php echo $ativo; ?>">
        <img src="imagens/<?php echo htmlspecialchars($row_slide['id']); ?>/<?php echo htmlspecialchars($row_slide['imagem']); ?>"
             class="d-block w-100" alt="Slide <?php echo $index + 1; ?>">
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Controles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>


    <!-- Incluir o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
  </div>
</body>

</html>