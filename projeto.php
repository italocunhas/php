<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Corporal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Calculadora de Peso Corporal</h2>

        <form action="projeto.php" method="POST">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="peso">Seu Peso (em kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" required>

            <button type="submit">Mostrar Peso</button>
        </form>

        <div class="resultado">
            <?php
                // Verifica se o formulário foi enviado usando o método POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Pega os valores dos campos 'nome' e 'peso' do formulário
                    $nome = $_POST['nome'];
                    $peso = $_POST['peso'];

                    // Mostra a mensagem final com o nome e o peso
                    echo "<p>Olá, <strong>" . $nome . "</strong>!</p>";
                    echo "<p>O seu peso corporal é de <strong>" . $peso . " kg</strong>.</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>