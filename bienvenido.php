<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
echo "<h1>Bienvenido, " . $_SESSION['usuario'] . "!</h1>";
echo "<a href='logout.php'>Cerrar sesión</a>";
?>