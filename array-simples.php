<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3 align ='center'>ARRAY SIMPLES EM PHP</h3>";
    echo "<hr>";
    //Definindo o array
    $transporte = array("Carro","Moto","Bicicleta","Avião","Ônibus","Navio");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $input_value = $_POST["transporte_index"];
      if (isset($transporte[$input_value])) {
        echo "<p>O transporte selecionado é: ". $transporte[$input_value]. "</p>";
      } else {
        echo "<p>Índice inválido!</p>";
      }
    }
?>
    
    <form method="post">
      <label for="transporte_index">Selecione o transporte:</label>
      <input type="number" id="transporte_index" name="transporte_index" required>
      <button type="submit">Exibir</button>
    </form>
</body>
</html>