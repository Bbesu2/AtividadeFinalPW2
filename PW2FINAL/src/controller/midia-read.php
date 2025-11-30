<?php
include '../Config/DataBase.php';

$sql = "SELECT * FROM tbmidia";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
    while($row = $res->fetch_object()){
        print $row->codigo ;
        print $row->nome;
        print $row->genero;
        print $row->sinopse;
        print $row->clasInd;
        print $row->anoLanc;
        print $row->tipo;
        print $row->episodio;
        echo "</br>";
    }
}
header("Location: ../view/TelaInicial.php");
exit;
?>
