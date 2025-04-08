<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroBase = $_POST['base'];
    $tentativas = 0;
    $numerosGerados = [];

    do {
        $tentativas++;
        $numeroAleatorio = rand(0, 100);
        $numerosGerados[] = $numeroAleatorio;
    } while ($numeroAleatorio != $numeroBase);

    echo "<h3>O número base era: $numeroBase</h3>";
    echo "Número de tentativas: $tentativas<br>";
    echo "Números gerados: " . implode(", ", $numerosGerados);
}
?>

<form method="POST">
    <label for="base">Informe o número base (0-100):</label>
    <input type="number" name="base" id="base" min="0" max="100" required>
    <input type="submit" value="Adivinhar">
</form>
