<?php
require_once "config/db.php"; 

$mensaje_confirmacion = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre  = trim($_POST["nombre"]);
    $correo  = trim($_POST["correo"]);
    $mensaje = trim($_POST["mensaje"]);

    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        $mensaje_confirmacion = "Por favor, completa todos los campos.";
    } else {
        $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([$nombre, $correo, $mensaje])) {
            $mensaje_confirmacion = "¡Tu mensaje se ha enviado correctamente! 💌";
        } else {
            $mensaje_confirmacion = "Error al enviar el mensaje. Intenta nuevamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Brised</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <nav id="navbar">
        <div class="nav-container">
            <a href="index.html" class="logo">
                <div class="logo-icon">✨</div>
                <div class="logo-text">Brised</div>
            </a>
            <ul class="nav-links">
                <li><a href="index.html#inicio">Inicio</a></li>
                <li><a href="index.html#about">Sobre mí</a></li>
                <li><a href="index.html#hobbies">Hobbies</a></li>
                <li><a href="contacto.php" class="active">Contacto</a></li>
            </ul>
            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="mobile-nav" id="mobileNav">
            <ul>
                <li><a href="index.html#inicio">Inicio</a></li>
                <li><a href="index.html#about">Sobre mí</a></li>
                <li><a href="index.html#hobbies">Hobbies</a></li>
                <li><a href="contacto.php" class="active">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section id="contacto" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contacto</h2>
            </div>
            
            <div class="contacto-form-box">
                <?php if (!empty($mensaje_confirmacion)): ?>
                    <p class="mensaje-confirmacion"><?= $mensaje_confirmacion ?></p>
                <?php endif; ?>
                
                <form class="contacto-form" action="contacto.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-input" placeholder="Tu nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="correo" class="form-input" placeholder="Tu correo" required>
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" class="form-textarea" rows="5" placeholder="Tu mensaje..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-bottom">
            <p>© 2025 Brised Carlozama. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>