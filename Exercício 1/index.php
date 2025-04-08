<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
    $cedulas = [100, 50, 20, 10, 5, 2, 1];
    
    echo "<h3>Valor informado: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
    
    foreach ($cedulas as $cedula) {
        $qtd = intdiv($valor, $cedula); 
        if ($qtd > 0) {
            echo "$qtd cédulas de R$ " . number_format($cedula, 2, ',', '.') . "<br>";
        }
        $valor -= $qtd * $cedula; 
    }
}
?>

<form method="POST">
    <label for="valor">Informe um valor em R$:</label>
    <input type="number" name="valor" id="valor" step="0.01" required>
    <input type="submit" value="Calcular">
</form>
