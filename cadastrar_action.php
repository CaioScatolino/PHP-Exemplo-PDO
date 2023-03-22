<?php

require 'config.php';

$equipamento = filter_input(INPUT_GET, 'equipamento');
$modelo = filter_input(INPUT_GET, 'modelo');
$motivo = filter_input(INPUT_GET, 'motivo');


if($equipamento && $modelo && $motivo) {

    $sql = $pdo->prepare("INSERT INTO corretiva (equipamento, modelo, motivo)
    VALUES (:equipamento, :modelo, :motivo)");
    $sql->bindValue(':equipamento', $equipamento);
    $sql->bindValue(':modelo', $modelo);
    $sql->bindValue(':motivo', $motivo);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
    header("Location: cadastrar.php");
    exit;
}

?>