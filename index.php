<?php include 'php/data_services.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>BinkBe - Talento</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <header class="main-header">
            <div class="logo">
                <img src="images/logo.png" alt="BinkBe Logo">
            </div>

            <nav class="nav-buttons">
                <button class="login">Iniciar sesión</button>
                <button class="register">Regístrate</button>
            </nav>
        </header>

        <main class="content">
            <h1 class="title">Nuestro <span class="highlight">Talento</span></h1>
            <section class="filters">
                <input type="text" id="searchInput" placeholder="Buscar...">

                <button data-filter="Todos">Todos</button>
                <button data-filter="Diseño">Diseño</button>
                <button data-filter="Desarrollo">Desarrollo</button>
                <button data-filter="Marketing">Marketing</button>
            </section>

            <section class="grid">
                <?php foreach ($services as $service): ?>
                    <article 
                        class="card"
                        data-name="<?= strtolower($service['nombre']) ?>"
                        data-category="<?= $service['especialidad'] ?>"

                        <figure>
                            <img 
                                src="<?= $service['imagen_url'] ?>" 
                                alt="<?= $service['nombre'] ?>"
                            >
                        </figure>

                        <h3><?= $service['nombre'] ?></h3>

                        <span class="category">
                            <?= $service['especialidad'] ?>
                        </span>

                        <p class="rating">
                            <i class="fa-solid fa-star"></i>
                            <?= $service['rating'] ?>
                        </p>

                        <p class="<?= $service['disponibilidad'] ? 'true' : 'false' ?>">
                            <?= $service['disponibilidad'] ? 'Disponible' : 'No disponible' ?>
                        </p>

                        <button class="favorite">
                        <i class="fa-solid fa-heart"></i>
                        </button>
                    </article>
                <?php endforeach; ?>
            </section>

        </main>

        <script src="js/app.js"></script>

    </body>
</html>