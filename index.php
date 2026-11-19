<?php
$enlaces = [
    ['book', 'https://icons.getbootstrap.com/', 'Bootstrap Icons'],
    ['book', 'https://getbootstrap.com/docs/6.0/getting-started/install/', 'Explore Bootstrap docs'],
    ['balloon', 'https://getbootstrap.com/docs/6.0/examples/starter-template/', 'Starter template'],
    ['balloon','https://getbootstrap.com/docs/6.0/examples/', 'Download examples'],
    ['award','https://blog.getbootstrap.com/', 'Blog']
];
$title = "Enlaces con Bootstrap";
$description = "mis experiencias online";
$image = "favicon.ico";
$url_completa = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$author = "tr3x.es";


function mostrarEnlaces($enlaces) {
    foreach ($enlaces as $enlace) {
        echo '<a href="' . $enlace[0] . '">' . $enlace[1] . '</a><br>';
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">

    <!-- 2. Etiquetas Open Graph (Para vistas previas en Telegram, WhatsApp, Facebook, etc.) -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>"> <!-- URL absoluta de tu imagen -->
    <meta property="og:url" content="<?php echo $url_completa; ?>"> <!-- URL de tu web -->
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional para darle mejor estilo) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Contenido Principal -->
    <main class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 text-center">
                
                <!-- Encabezado / Perfil ficticio -->
                <div class="mb-4">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 80px; height: 80px; font-size: 2rem;">
                        <i class="bi bi-chat-left-quote-fill"></i>
                    </div>
                    <h1 class="h3 fw-bold text-dark"><?php echo $title; ?></h1>
                    <p class="text-muted"><?php echo $description; ?></p>
                </div>
<?php
foreach ($enlaces as $enlace) {
?>
                <div class="d-grid gap-3">
                <a href="<?php echo $enlace[1]; ?>" target="_blank" class="btn btn-outline-dark btn-lg shadow-sm py-3 text-start d-flex align-items-center justify-content-between">
                    <span><i class="bi bi-<?php echo $enlace[0]; ?> me-2"></i> <?php echo $enlace[2]; ?></span>
                    <i class="bi bi-arrow-right text-muted"></i>
                </a>

<?php
    }
    ?>

                </div>

            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="text-center py-4 text-muted small">
        <p class="mb-0">&copy; 2026 - Creado con Bootstrap 5</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
