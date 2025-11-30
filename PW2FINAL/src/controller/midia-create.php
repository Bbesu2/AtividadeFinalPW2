<?php
include '../Config/DataBase.php';

switch(@$_REQUEST['acao']){

    case 'adicionar':
    $tipo = $_POST["tipo"];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $anoLanc = $_POST["anoLanc"];
    $sinopse = $_POST["sinopse"];
    $clasInd = $_POST["clasInd"];
    $episodio = $_POST["episodio"];

        $sql = "INSERT INTO tbmidia (nome, genero, sinopse, clasInd, anoLanc, tipo, episodio) 
                VALUES ('{$nome}', '{$genero}', '{$sinopse}', '{$clasInd}', '{$anoLanc}', '{$tipo}', '{$episodio}')";

        $resultado = $conn->query($sql);

        if ($resultado == true) {
            echo 'Midia cadastrada com sucesso!';
header("Location: ../view/TelaInicial.php");
        } else {
            echo 'Erro ao cadastrar a midia';
        print header("Location: ../view/TelaInicial.php");
        }
    break;
    case 'listar':

    break;
    case 'editar':
    $tipo = $_POST["tipo"];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $anoLanc = $_POST["anoLanc"];
    $sinopse = $_POST["sinopse"];
    $clasInd = $_POST["clasInd"];
    $episodio = $_POST["episodio"];

       $sql = "UPDATE tbmidia SET
                nome = '{$nome}',
                genero = '{$genero}',
                sinopse = '{$sinopse}',
                clasInd = '{$clasInd}',
                 anoLanc = '{$anoLanc}',
                 tipo = '{$tipo}',
                episodio =  '{$episodio}'
                WHERE
                    codigo = ".$_REQUEST["id"];

        $resultado = $conn->query($sql);

        if ($resultado == true) {
            echo 'Midia editada com sucesso!';
        header("Location: ../view/TelaInicial.php");
        } else {
            echo 'Erro ao editar a midia';
        print header("Location: ../view/TelaInicial.php");
        }
    break;
    case 'deletar':
        $sql = "DELETE FROM tbmidia WHERE id=" .$_REQUEST["id"];

         $resultado = $conn->query($sql);

        if ($resultado == true) {
            echo 'Midia excluida com sucesso!';
        header("Location: ../view/TelaInicial.php");
        } else {
            echo 'Erro ao excluir a midia';
        print header("Location: ../view/TelaInicial.php");
        }
    break;
}