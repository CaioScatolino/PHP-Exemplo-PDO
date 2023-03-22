<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Apontamento</title>
</head>
<body>
    <form action="cadastrar_action.php" method="get">

    <input type="text" name="equipamento" id="" placeholder="Nome do Equipamento"><br><br>
    
    <label for=""> Selecione o Modelo: <br>
    <select name="modelo" id="">
        <option value="aquecedor">Aquecedor</option>
        <option value="mesa">Mesa</option>
    </select>
    </label><br><br>

    <input type="text" name="motivo" id="" placeholder="Escreva o motivo"> <br><br>

    <input type="submit" value="Enviar">

    </form>
</body>
</html>