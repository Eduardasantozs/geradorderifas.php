
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        .summary { text-align: center; color: #555; }
        .ticket { border: 1px solid #ddd; padding: 20px; margin: 15px 0; border-radius: 8px; background-color: #f9f9f9; }
        .ticket-header { font-weight: bold; color: #555; text-align: center; }
        .ticket-number { font-size: 24px; font-weight: bold; text-align: center; color: #333; margin: 10px 0; }
        .ticket-info { margin-top: 10px; }
        .ticket-info p { margin: 5px 0; color: #666; }
        hr { border: none; border-top: 1px dashed #ddd; margin: 10px 0; }
    </style>
</head>

<body>

<div class="container">
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {


   $premio = $_POST['premio'];
        $data = $_POST['DATA'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quant'];

       
        echo "<h1>Rifa Gerada - Ação Para Amigos</h1>";
        echo "<div class='summary'>";
        echo "<p><strong>Prêmio:</strong> " . htmlspecialchars($premio) . "</p>";
        echo "<p><strong>Data do Sorteio:</strong> " . htmlspecialchars($data) . "</p>";
        echo "<p><strong>Valor de Cada Número:</strong> R$ " . number_format($valor, 2, ',', '.') . "</p>";
        echo "<p><strong>Quantidade de Números:</strong> " . htmlspecialchars($quantidade) ."</p>";
        echo "</div>";

        // Verifica se todos os campos estão preenchidos corretamente
        if ($premio && $data && $valor > 0 && $quantidade > 0) {

            echo "<h3>Rifa Gerada</h3>";
            echo "<p><strong>Prêmio:</strong> $premio</p>";
            echo "<p><strong>Data do Sorteio:</strong> $data</p>";
            echo "<p><strong>Valor de Cada Número:</strong> R$" . number_format($valor, 2, ',', '.') . "</p>";
            echo "<p><strong>Quantidade de Números:</strong> $quantidade</p>";
            echo "<h4>Números da Rifa:</h4>";

            // Gera a lista de números da rifa
            for ($i = 1; $i <= $quantidade; $i++) {
                echo "<p>Número: $i - Valor: R$" . number_format($valor, 2, ',', '.') . "</p>";
            }
        } else {
            echo "<p>Por favor, preencha todos os campos corretamente.</p>";
        }
    }
    for ($i = 1; $i <= $ticket_; $i++) {
        echo "<div class='ticket'>";
        echo "<div class='ticket-header'>Ação para amigos</div>";
        echo "<div class='ticket-num'>Número: " . str_pad($i, 4, '0', STR_PAD_LEFT) . "</div>";
        echo "<div class='ticket-info'>";
        echo "<p><strong>Prêmio:</strong> " . htmlspecialchars($premio) . "</p>";
        echo "<p><strong>Valor:</strong> R$ " . number_format($valor, 2, ',', '.') . "</p>";
        echo "<p><strong>Data:</strong> " . htmlspecialchars($data) . "</p>";
        echo "<hr>";
        echo "<p><strong>Nome:</strong> ____</p>";
        echo "<p><strong>Endereço:</strong> ____</p>";
        echo "<p><strong>Fone:</strong> ____</p>";
        echo "</div>";
        echo "</div>";
    }

    ?>

   
</div>

</body>
</html>

