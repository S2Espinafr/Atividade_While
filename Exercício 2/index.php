<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroUsuario = $_POST['numero'];
    $tentativas = 0;
    
    echo "<h3>Numero informado: " . $numeroUsuario . "</h3>";
    
    do {
        $numeroAleatorio = rand(1, 10);
        $numeroUsuario -= $numeroAleatorio;
        $tentativas++;
    } while ($numeroUsuario > 0);
    
    echo "Número de tentativas: $tentativas<br>";
    echo "Resultado final: $numeroUsuario";
}
?>

<form method="POST">
    <label for="numero">Informe um número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Subtrair">
</form>
