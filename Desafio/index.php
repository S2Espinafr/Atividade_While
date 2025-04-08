<?php
session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tentativa = $_POST['tentativa'];
    $_SESSION['tentativas']++;
    
    if ($tentativa > $_SESSION['numero']) {
        echo "O número é menor!<br>";
    } elseif ($tentativa < $_SESSION['numero']) {
        echo "O número é maior!<br>";
    } else {
        echo "Parabéns! Você acertou o número: " . $_SESSION['numero'] . "<br>";
        echo "Número de tentativas: " . $_SESSION['tentativas'] . "<br>";
        session_destroy(); 
    }
}
?>

<form method="POST">
    <label for="tentativa">Tente acertar o número (1-100):</label>
    <input type="number" name="tentativa" id="tentativa" min="1" max="100" required>
    <input type="submit" value="Tentar">
    <input type="hidden" name="sorte" value="<?php echo $_SESSION['numero']; ?>">
</form>
