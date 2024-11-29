<?php
session_start();

// Destruir la sesión para reiniciar el juego
if (isset($_SESSION['palabraPerdida'])) {
    $palabraPerdida = $_SESSION['palabraPerdida'];
    session_destroy();
} else {
    $palabraPerdida = 'No disponible';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Has perdido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="resultado perdido">
        <h1>Lo siento, has perdido :(</h1>
        <p>La palabra era: <?php echo $_SESSION['palabraPerdida']; ?></p>
        <a href="index.php"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>