
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../assets/shared/desktop/logo.svg"
    />
    <link rel="stylesheet" href="../styles/main.css" />
    <title>Home Ia | Contato</title>
  </head>

  <body class="contact-body">
    <header>
      <nav class="navigation container">
        <!-- Logo -->
        <a href="index.php" class="navigation__logo">
          <img src="../assets//shared/desktop/logo.svg" alt="payapi logo" />
        </a>
      </nav>
    </header>

    <main class="contact-main">
      <div class="container">
        <h1 class="contact__heading">
        </h1>
      </div>

      <div class="container contact__wrapper">
        <section id="contact" class="contact">
          <form id="contact-form" class="contact__form" action="admin2.php" method="POST">
            <div class="contact__form-group">
              <input
                id="name"
                type="text"
                placeholder="Nome"
                name="name"
                class="form-group__input"
              />
              <small></small>
            </div>
            <div class="contact__form-group">
              <input
                id="email"
                type="email"
                name="email"
                placeholder="Endereço de E-mail"
                class="form-group__input"
              />
              <small></small>
            </div>
            <div class="contact__form-group">
              <input
                id="telefone"
                type="text"
                name="telefone"
                placeholder="Número de telefone"
                class="form-group__input"
              />
              <small></small>
            </div>
            <div class="contact__form-group">
              <input
                id="senha"
                type="text"
                name="senha"
                placeholder="Senha"
                class="form-group__input"
              />
              <small></small>
            </div>
            <button
              id="submit"
              type="submit"
              href="../admin.php"
              class="button dark-button form-group__contact-button"
            >
            Cadrastrar
            </button>
    <script src="./js/index.js"></script>
  </body>
</html>
