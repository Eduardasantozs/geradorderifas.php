<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de rifa</title>
    <style>

        body {
     font-family: Arial, sans-serif;
     background-color: #f4f4f9; 
     margin: 0; 
     padding: 0; }

        .container { 
        max-width: 600px; 
        margin: 50px auto; 
        padding: 20px; 
        background-color: #fff; 
        border-radius: 8px; 
        box-shadow: 0 0 10px rgba(0,0,0,0.1); }

        h1 { 
        text-align: center; 
        color: #333; }

        form { 
        display: flex; 
        flex-direction: column; }

        label { 
        margin-top: 15px; 
        color: #333; 
        font-weight: bold; }

        input[type="text"], input[type="number"], input[type="date"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px; 
        font-size: 16px; };

        button { 
        margin-top: 20px; 
        padding: 10px; 
        background-color: purple; 
        color: #fff; border: none; 
        border-radius: 5px; 
        font-size: 16px; 
        cursor: pointer; }

        button:hover { 
            background-color: #45a049; }

    </style>
</head>
<body>


<div class="container">
    <form action="Rifa.php" method="post">


    <label for="premio">Prêmio</label>
    <input type="text" name="premio" id="premio" placeholder="Nome do prêmio" maxlength="100" required><br>

   <label for="data">Data</label><br>
    <input type="date" name="DATA" id="DATA"><br>

    <label for="valor">Valor</label><br>
    <input type="number" step="0.10"  name="valor" placeholder="Valor do prêmio"><br>

    <label for="quant">Quantidade de números</label><br>
    <input type="number" step="0.1"  name="quant" placeholder="quantidade"><br>


    <input type="submit" name="GERAR" value="GERAR" id="GERAR"><br>

</div>
</body>
</html>