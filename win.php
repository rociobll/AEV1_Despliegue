<?php
session_start();

// Destruir la sesión para reiniciar el juego
if (isset($_SESSION['palabraGanada'])) {
    $palabraGanada = $_SESSION['palabraGanada'];
    session_destroy();
} else {
    $palabraGanada = 'No disponible';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ganador</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="resultado ganado">
        <h1>¡Enhorabuena!</h1>
        <p>Has ganado!!! :)</p>
        <p>La palabra era: <?php echo $_SESSION['palabraGanada']; ?></p>
        <a href="index.php"><button>Jugar de nuevo</button></a>
    </div>
</body>
</html>