<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/shared/desktop/logo.svg"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/main.css" />
    <title>Home Ia</title>
  </head>

  <body class="index-body">
    <header class="header-wrapper">
      <nav class="navigation container">
        <!-- Logo -->
        <a href="index.php" class="navigation__logo">
          <img src="./assets//shared/desktop/logo.svg" alt="payapi logo" />
        </a>
        <!-- Toggle Button -->
        <button id="jsToggleButton" class="navigation__toggle button">
          <img
            id="jsToggleImg"
            src="./assets/shared/mobile/menu.svg"
            alt="menu icon"
          />
        </button>
        <!-- Nav Links -->
        <ul class="navigation__list close">
          <li class="navigation__item">
            <a class="navigation__link" href="about.php">Sobre</a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="pricing.php">Planos</a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="contact.php">Contato</a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link button primary" href="register.php"
              >Cadastre-se</a
            >
          </li>
        </ul>
      </nav>
      <section class="homepage-hero container">
        <img
          class="homepage-hero__img"
          src="./assets//home/desktop/illustration-phone-mockup.svg"
          alt="illustration mockup"
        />
        <div class="homepage-hero__left">
          <h1 class="homepage-hero__tagline">
            Conheça seu suporte inteligente de dispositivos
          </h1>
          <form class="hero-form">
            <input
              aria-label="Email Address"
              class="input"
              type="email"
              placeholder="E-mail"
            />
            <button class="hero-form__button button primary" type="submit">
              Faça um orçamento
            </button>
            <small class="hero-form__small"
              >Possui dúvidas?
              <span class="hero-form__span">Entre em contato</span>
            </small>
          </form>
        </div>
      </section>
    </header>
    <main class="main">
      <section id="references" class="references">
        <div class="container references__wrapper">
          <div class="references-logos">
            <svg
              class="tesla"
              width="131"
              height="17"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M89.447.047v13.628h14.74c-.375 1.405-1.264 2.623-2.902 3.325h-15.16V.047h3.322zm-12.588 0c-.374 1.452-1.825 2.81-3.603 3.325H61.558l.047 3.372h15.16V17H57.347c.796-1.64 2.387-2.904 4.259-3.419H73.49V10.07H58.33V.047zM21.196 0v.047c-.371 1.503-1.623 2.912-3.386 3.381h-5.287l-.279.094V17H8.951V3.522l-.278-.094H3.386C1.67 3.052.37 1.55 0 .047L21.196 0zm108.586 6.744V17h-3.275v-6.837h-11.98V17h-3.275V6.744h18.53zM48.783 13.58c-.327 1.499-1.637 3.091-3.416 3.419H32.733c-1.778-.328-3.088-1.92-3.462-3.419zm0-6.884c-.327 1.499-1.637 3.09-3.416 3.419H32.733c-1.778-.375-3.088-1.92-3.462-3.419zM130.203 0c-.374 1.499-1.637 3.09-3.416 3.419h-12.634c-1.731-.375-3.041-1.92-3.416-3.419zm-81.42 0c-.327 1.499-1.637 3.09-3.416 3.419H32.733c-1.778-.375-3.088-1.92-3.462-3.419z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
            <svg
              class="microsoft"
              width="148"
              height="31"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.922 16v15H.782V16h15.14zm16.149 0v15H16.93V16h15.14zm79.549-4.777c.457 0 .983.054 1.562.16.582.107 1.061.238 1.425.392l.05.021v2.858l-.13-.087a5.195 5.195 0 00-1.403-.642 5.593 5.593 0 00-1.607-.244c-.57 0-1.023.127-1.35.376-.323.248-.48.554-.48.936 0 .432.127.772.378 1.013.261.25.894.574 1.881.965 1.24.493 2.128 1.05 2.64 1.659.516.612.777 1.372.777 2.258 0 1.228-.486 2.232-1.444 2.985-.953.748-2.258 1.127-3.88 1.127-.525 0-1.13-.07-1.795-.205-.667-.135-1.232-.308-1.681-.512l-.049-.022v-3.014l.132.094a6.547 6.547 0 001.776.888c.639.208 1.222.313 1.733.313 1.38 0 2.05-.43 2.05-1.313 0-.31-.067-.561-.197-.745-.134-.187-.371-.38-.706-.572-.342-.195-.88-.443-1.603-.736-.86-.365-1.508-.723-1.928-1.065a3.28 3.28 0 01-.948-1.221c-.204-.465-.308-1.013-.308-1.63 0-1.187.482-2.168 1.431-2.916.944-.744 2.18-1.12 3.674-1.12zM137.763 5c.734 0 1.327.078 1.762.232l.055.02v2.656l-.117-.052a3.424 3.424 0 00-1.379-.31c-.623 0-1.111.198-1.453.586-.344.394-.519.983-.519 1.753v1.655h4.704V8.57l.059-.018 2.98-.9.106-.032v3.92h3.173v2.521h-3.172v6.205c0 .795.144 1.364.43 1.689.281.322.735.485 1.35.485.162 0 .373-.035.626-.105.25-.069.465-.161.637-.274l.13-.084v2.544l-.042.025c-.19.106-.51.206-.981.306a6.562 6.562 0 01-1.347.148c-2.62 0-3.95-1.409-3.95-4.189v-6.75h-4.703v10.622h-3.171V14.06h-2.21V11.54h2.21V9.72c0-.913.204-1.739.607-2.454a4.246 4.246 0 011.716-1.673c.733-.394 1.574-.593 2.5-.593zm-13.973 6.223c2.07 0 3.71.608 4.877 1.806 1.166 1.198 1.757 2.865 1.757 4.955 0 2.116-.63 3.833-1.873 5.102-1.243 1.27-2.953 1.913-5.082 1.913-2.043 0-3.694-.61-4.907-1.817-1.214-1.206-1.829-2.86-1.829-4.919 0-2.166.63-3.9 1.873-5.152 1.244-1.253 2.988-1.888 5.184-1.888zm-25.402 0c2.069 0 3.71.608 4.876 1.806 1.166 1.198 1.758 2.865 1.758 4.955 0 2.116-.63 3.833-1.873 5.102-1.243 1.27-2.953 1.913-5.082 1.913-2.043 0-3.694-.61-4.907-1.817-1.214-1.206-1.83-2.86-1.83-4.919 0-2.166.631-3.9 1.874-5.152 1.243-1.253 2.988-1.888 5.184-1.888zm-20.614 0c.56 0 1.148.062 1.75.186.606.123 1.093.286 1.45.483l.043.024V14.9l-.132-.094c-.95-.68-1.953-1.023-2.982-1.023-1.204 0-2.193.402-2.939 1.196-.748.797-1.127 1.876-1.127 3.208 0 1.324.364 2.376 1.082 3.126.716.748 1.703 1.128 2.932 1.128.443 0 .947-.097 1.501-.287a5.917 5.917 0 001.533-.788l.132-.095v2.833l-.042.023c-1.019.58-2.29.873-3.779.873-1.276 0-2.428-.277-3.425-.822a5.855 5.855 0 01-2.344-2.339c-.557-1.004-.839-2.144-.839-3.385 0-1.418.291-2.69.863-3.777a6.127 6.127 0 012.513-2.55c1.09-.6 2.372-.904 3.81-.904zm12.076.089c.523 0 .935.062 1.227.184l.05.021v3.117l-.13-.094c-.146-.103-.392-.201-.731-.292a3.724 3.724 0 00-.942-.136c-.833 0-1.515.355-2.026 1.056-.519.71-.781 1.648-.781 2.792v6.723h-3.133V11.54h3.133v2.276h.033c.293-.739.675-1.331 1.205-1.763a3.236 3.236 0 012.095-.741zm-21.42.228v13.143h-3.132V11.54h3.133zM46.77 6.343l5.458 13.622 5.624-13.622h4.425v18.34H59.08V10.57h-.103l-5.674 14.113h-2.267l-5.764-14.114h-.103v14.114h-3.005V6.343h4.605zm76.854 7.44c-1.134 0-2.033.382-2.673 1.136-.643.759-.97 1.85-.97 3.243 0 1.351.327 2.414.97 3.16.64.742 1.547 1.119 2.698 1.119 1.158 0 2.044-.37 2.633-1.098.593-.733.894-1.83.894-3.257 0-1.41-.32-2.492-.95-3.217-.627-.72-1.503-1.086-2.602-1.086zm-25.402 0c-1.134 0-2.033.382-2.672 1.136-.644.759-.97 1.85-.97 3.243 0 1.351.325 2.414.969 3.16.64.742 1.547 1.119 2.698 1.119 1.158 0 2.044-.37 2.632-1.098.594-.733.894-1.83.894-3.257 0-1.41-.32-2.492-.95-3.217-.627-.72-1.502-1.086-2.601-1.086zM15.922 0v15H.782V0h15.14zM32.07 0v15H16.93V0h15.14zm34.825 5.941c.543 0 1.001.178 1.362.53.362.353.546.782.546 1.276 0 .503-.189.929-.56 1.264-.37.334-.823.503-1.347.503-.525 0-.976-.17-1.341-.503a1.646 1.646 0 01-.554-1.264c0-.512.189-.945.56-1.29.369-.343.819-.516 1.334-.516z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
            <svg
              class="hewlett-packard"
              width="142"
              height="27"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M69.493 16.373L74.305 27h-2.478l-.868-1.923h-6.086L64.015 27h-2.572l4.907-10.627h3.143zm50.612 0c1.715 0 3.191 1.202 3.191 3.366 0 1.923-.38 2.644-.953 3.126.762.384.953 1.297.953 1.922v2.211h-2.286v-1.922c0-.433-.477-1.203-1.43-1.203h-4.095V27h-2.382V16.373zm-29.566.01v3.984h1.046l4.138-3.984h3.234l-5.09 4.991 4.233 4.224v1.392h-1.808l-4.517-4.416H90.54v4.416h-2.427V16.383h2.427zm-31.815.006c1.282 0 3.04.815 3.04 3.835 0 2.973-1.616 3.787-3.041 3.787h-5.226v2.973h-2.423V16.389zm74.75.002c1.995 0 2.945 1.39 2.945 3.259v3.237c-.012 1.508-.265 4.094-2.992 4.094h-7.74v-10.59zm-26.99.003l4.797 10.585h-2.47l-.865-1.916h-6.067l-.854 1.916h-1.899v-1.485l4.225-9.1h3.133zm-22.863.006c1.518.047 2.418 1.627 2.418 2.536v.908H83.62c-.049-.479-.475-1.195-.854-1.195h-4.175c-.947 0-.805.956-.805.956v4.21c0 .766.474.957.759.957h4.126c.9 0 .997-.765.997-1.244h2.37v.957c0 1.58-1.09 2.488-2.417 2.488h-5.787c-1.803 0-2.467-1.388-2.467-2.488v-5.598c0-1.195 1.28-2.487 2.419-2.487zM40.52 0c1.97 0 3.567 1.58 3.567 3.57v19.72a3.6 3.6 0 01-1.046 2.539 3.537 3.537 0 01-2.52 1.044H23.662l.718-2.17c5.98-.888 10.545-5.597 10.545-11.273 0-6.106-5.283-11.094-11.929-11.409L23.76 0h16.76zM17.886 0l-.855 2.4c-4.115 2.205-7.199 6.638-7.199 11.03 0 4.998 3.55 9.408 8.488 11.01l-.861 2.433H4.252c-1.965 0-3.558-1.625-3.558-3.61V3.598C.693 1.614 2.285.004 4.252.001h13.634zm11.91 7.902c1.328 0 2.705.698 1.993 2.605l-2.041 5.677c-.38 1.07-.712 1.815-2.706 1.815h-2.495L21.727 26H19.02l6.36-18.098zm103.062 10.694h-4.75v6.18h4.56c.854 0 1.329-.814 1.329-1.724v-3.02c.049-.669-.426-1.436-1.14-1.436zm-64.937-.252l-2.048 4.52h4.049l-2.001-4.52zm36.997.014l-2.042 4.502h4.074l-2.032-4.502zm-46.907.236h-4.514v3.212h4.656c1.046 0 1.046-1.102 1.046-1.581v-.07c-.003-.512-.054-1.56-1.188-1.56zm61.568-.009h-4.095v3.077h4.382c.905 0 1.143-1.106 1.143-1.634 0-.53-.238-1.443-1.43-1.443zM21.934 0l-2.838 7.947h1.609c1.655 0 2.507.696 2.081 2.086-.426 1.39-2.838 7.969-2.838 7.969h-2.79l2.79-7.784c.094-.464.094-.88-.472-.88h-.852l-3.121 8.664h-2.697V18L19.191 0h2.743zM28.8 9.298h-1.187l-2.574 7.305h1.197c.475 0 .712-.512.76-.791.003-.017.012-.051.028-.102l.063-.198c.146-.442.447-1.301.77-2.213l.177-.5c.505-1.419 1.003-2.803 1.003-2.803.142-.372.19-.698-.237-.698zM78.28.156l2.241 7.264L82.904.204h2.287l2.382 7.216 2.24-7.264h2.43l-3.43 10.632h-1.43c-.715-.001-1.405-1.083-1.549-1.612L84.048 3.62l-2.335 7.168h-1.477c-.715 0-1.335-1.106-1.478-1.635L75.85.156h2.43zm58.079.002V2.37h-3.548v8.413h-2.428V2.37h-3.5V.158h9.476zM74.48.167v2.21h-7.325v1.968h6.088v2.208h-6.088v2.016h7.325v2.207h-8.228c-.952 0-1.522-.768-1.522-1.392V1.751c0-.96.57-1.584 1.664-1.584h8.086zm50.658-.002v2.21h-3.545v8.401h-2.425V2.375h-3.497V.165h9.467zm-11.244.006v2.206h-7.32v1.967h6.084V6.55h-6.084v2.015h7.32v2.206h-8.223c-.952 0-1.522-.767-1.522-1.391V1.755c0-.96.57-1.584 1.664-1.584h8.08zM53.497.174v4.17h6.319V.175h2.423v10.595h-2.423v-4.22h-6.32v4.22h-2.422V.174h2.423zm42.929.004V8.56h6.41v2.204h-7.123c-1.092 0-1.71-.766-1.71-1.58V.177h2.423zm43.216-.084c.627-.01 1.23.24 1.669.692.458.462.689 1.021.689 1.677.01.634-.24 1.243-.69 1.686a2.26 2.26 0 01-1.668.699 2.244 2.244 0 01-1.665-.699 2.317 2.317 0 01-.683-1.686 2.3 2.3 0 01.69-1.677 2.255 2.255 0 011.658-.692zm.001.32c-.56 0-1.036.2-1.431.602-.394.399-.59.881-.59 1.446-.01.546.202 1.073.587 1.457a1.93 1.93 0 001.433.602c.54.009 1.06-.21 1.434-.602.394-.402.59-.887.59-1.457 0-.565-.196-1.047-.59-1.446a1.941 1.941 0 00-1.433-.602z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
            <svg
              class="oracle"
              width="133"
              height="17"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M57.081 11.06h8.737l-4.62-7.351-8.479 13.29h-3.858L59.174 1.036A2.445 2.445 0 0161.198 0c.802 0 1.55.376 1.984 1.008L73.536 17h-3.859l-1.82-2.97H59.01l-1.93-2.97zm40.084 2.97V.16h-3.274v15.226c0 .417.163.82.475 1.129.313.309.734.484 1.196.484h14.933l1.93-2.97h-15.26zM42.99 11.543c3.18 0 5.762-2.54 5.762-5.684 0-3.145-2.582-5.698-5.762-5.698H28.665V17h3.273V3.131h10.835a2.734 2.734 0 012.745 2.729 2.733 2.733 0 01-2.745 2.727l-9.231-.013L43.317 17h4.756l-6.577-5.456h1.495zM8.514 17C3.814 17 0 13.237 0 8.587S3.814.161 8.514.161h9.896c4.701 0 8.513 3.776 8.513 8.426S23.11 17 18.41 17H8.514zm9.676-2.97c3.045 0 5.512-2.433 5.512-5.443s-2.467-5.456-5.512-5.456H8.733c-3.044 0-5.511 2.446-5.511 5.456 0 3.01 2.467 5.443 5.511 5.443h9.457zM80.37 17c-4.7 0-8.519-3.763-8.519-8.413S75.67.161 80.371.161h11.754l-1.917 2.97h-9.62c-3.043 0-5.516 2.446-5.516 5.456 0 3.01 2.473 5.443 5.516 5.443h11.808L90.466 17H80.371zm40.044-2.97c-2.513 0-4.647-1.666-5.299-3.965h13.996l1.929-2.97h-15.925c.652-2.284 2.786-3.964 5.3-3.964h9.606l1.943-2.97h-11.767c-4.702 0-8.52 3.776-8.52 8.426s3.818 8.412 8.52 8.412h10.096l1.929-2.97h-11.808z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
            <svg
              class="google"
              width="97"
              height="33"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M74.618 8l-1.331 1.376h-1.77c1.45 1.274 2.086 2.635 2.086 4.217 0 2.306-1.259 3.462-2.15 4.243-.163.15-.598.462-.85.736-.142.168-.531.613-.531 1.285 0 .47.151.869.931 1.496 2.654 2.055 3.702 3.246 3.702 5.42 0 3.085-2.836 6.227-8.313 6.227-4.625 0-6.827-2.338-6.827-4.714 0-2.713 2.434-5.238 8.49-5.619-.64-.75-.942-1.237-.942-2.104.001-.589.244-1.197.244-1.197h-.89c-3.52 0-5.226-2.777-5.226-5.238C61.241 10.895 63.635 8 68.06 8h6.558zM68.59 23.664c-4.543.065-6.2 1.836-6.2 3.894 0 2.485 2.417 4.006 5.579 4.006 2.88 0 4.658-1.554 4.658-3.535 0-1.442-.808-2.25-2.103-3.31-.557-.439-1.353-1.027-1.353-1.027s-.243-.028-.58-.028zM13.512 0c4.22 0 7.172 1.284 9.21 2.636L19.5 5.794V3.891c-1.719-1.527-3.64-2.623-6.942-2.623-5.219 0-8.96 3.966-8.96 9.621 0 5.766 4.136 11.67 11.172 11.67 1.736 0 3.406-.23 4.729-.646V16.08h-4.24l1.42-1.38h7.56l-1.113 1.09c-.206.186-.344.398-.344.706v6.027C19.25 23.485 16.197 24 12.757 24 5.66 24 .015 19.425.015 11.83.015 6.492 4.249 0 13.512 0zm20.227 8c4.6.001 7.658 3.606 7.658 7.318 0 3.985-3.129 7.682-8.23 7.682-5.302 0-7.919-4.014-7.919-7.394C25.248 11.69 28.497 8 33.74 8zm47.873-8l-1.16 1.14a.878.878 0 00-.306.69v19.09c0 .41.295.831.79.89l1.844.227-.98.963h-6.425l1.177-1.154c.193-.197.283-.388.283-.669V1.403h-2.13L76.132 0h5.48zm8.66 8c3.852 0 5.528 1.987 6.123 3.96L86.1 15.833c.983 3.597 3.792 5.554 6.706 5.554 1.534 0 2.688-.436 4.103-1.1-.75.933-1.776 1.676-2.844 2.134-.995.425-2.057.579-3.346.579-5.172 0-7.94-3.978-7.94-7.798C82.78 10.576 86.638 8 90.27 8zM51.906 8c4.6.001 7.658 3.606 7.658 7.318 0 3.985-3.13 7.682-8.23 7.682-5.302 0-7.919-4.014-7.919-7.394C43.416 11.69 46.665 8 51.907 8zM32.87 9.076c-.6 0-1.514.114-2.49.715-1.194.802-1.952 1.891-1.952 4.122 0 2.24.79 4.533 1.597 5.766.918 1.34 2.143 2.36 3.897 2.36h.069c.684-.015 4.221-.29 4.221-5.017 0-3.308-1.646-7.946-5.342-7.946zm18.168 0c-.6 0-1.515.114-2.49.715-1.194.802-1.952 1.891-1.952 4.122 0 2.24.79 4.533 1.597 5.766.917 1.34 2.143 2.36 3.897 2.36h.069c.684-.015 4.221-.29 4.221-5.017 0-3.308-1.646-7.946-5.342-7.946zm15.801-.047c-1.547 0-2.848 1.2-2.848 3.458 0 2.5 1.17 4.603 2.348 5.392.53.375 1.157.526 1.68.526 1.067 0 3.04-.718 3.04-3.344 0-2.432-1.254-4.398-2.039-5.13-.708-.609-1.378-.902-2.18-.902zm22.758.03c-1.288 0-3.9.898-3.9 4.26 0 .801.172 1.543.172 1.543l6.328-2.382c.503-.185.758-.384.758-.762 0-1.168-1.41-2.66-3.358-2.66z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
            <svg
              class="nividia"
              width="139"
              height="26"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M40.086 0v26H15.427v-3.053c.522.058 1.043.087 1.594.087 5.708 0 15.777-2.908 20.095-6.525-.638-.637-3.724-2.098-4.477-2.706-4.55 3.907-9.243 7.22-15.734 7.22-.493 0-1-.044-1.492-.101v-2.17c.594.1 1.188.158 1.796.158 6.969 0 13.662-8.13 13.662-8.13s-5.838-7.626-14.777-7.322l-.696.043V0h24.688zM15.413 3.501l-.001 1.909-.014.001v.001l-.37.034c-6.73.69-10.15 5.567-10.275 5.748-.003.005 2.706 8.744 10.645 9.728v2.025C4.576 21.934.722 10.794.722 10.794s6.81-6.656 14.69-7.293zM90.19 5.03V22h-4.854V5.029h4.854zm9.78 0c3.876 0 6.47.46 8.249 2.833 1.005 1.323 1.574 3.452 1.574 5.84 0 2.603-.67 4.99-1.72 6.069C106.6 21.31 105.23 22 101.033 22h-7.87V5.029zm-29.558 0l3.877 13.447L78.341 5.03h4.955L77.699 22h-6.995L65.165 5.029h5.247zm46.508 0V22h-4.854V5.029h4.854zM56.07 5c4.16.03 8.351 1.013 8.351 7.607v9.378h-4.751v-7.752c0-2.374-.306-3.682-1.079-4.488-.597-.633-1.472-.935-2.725-.935l-3.819-.014v13.189h-4.897V5zm76.094.028L139 21.97h-5.203l-1.02-2.991h-8.016l-1.079 3.006h-4.78l6.777-16.957h6.486zM15.398 7.755v2.026h-.014c-2.507-.304-4.477 2.04-4.477 2.04l.008.027c.106.351 1.272 3.978 4.483 5.066v1.852c-5.998-1.071-7.664-7.307-7.664-7.307l.07-.074.089-.089c.663-.656 3.376-3.091 7.505-3.54zm84.659.956h-2.084v9.65h2.084c3.031 0 4.984-1.352 4.984-4.832 0-3.48-1.953-4.818-4.984-4.818zm-73.315 2.198l-.019.027-.099.131c-.743.976-4.891 6.15-9.313 6.15-.652 0-1.29-.1-1.898-.303V9.795c2.506.304 3.013 1.404 4.506 3.907l3.346-2.807s-2.448-3.198-6.563-3.198a9.832 9.832 0 00-1.304.058V5.412h.015l-.001-.002.334-.019c.116-.005.232-.009.348-.009 6.432-.202 10.648 5.527 10.648 5.527zm102.085-2.788l-3.032 7.94h5.976l-2.944-7.94z"
                fill="#fbfcfe"
                fill-rule="nonzero"
              />
            </svg>
          </div>
          <div class="references-description">
            <h2 class="references-description__heading">Nossos clientes</h2>
            <p class="references-description__copy">
              A Home IA já faz parte da vida de milhares de clientes. Nossa
              plataforma de administração de dispositivos é completa, possuindo
              diversas ferramentas voltadas para tornar o seu dia a dia mais
              confortável e eficaz.
            </p>
            <a href="about.php" class="button secondary">Sobre nós </a>
          </div>
        </div>
      </section>

      <section id="easy" class="easy">
        <div class="container easy__wrapper">
          <div class="easy__img">
            <img
              src="./assets/home/desktop/illustration-easy-to-implement.svg"
              alt="easy to implement example"
            />
          </div>
          <div class="easy__description">
            <h2 class="easy__heading">Fácil de usar</h2>
            <p class="easy__copy">
              Nossa plataforma é fácil de usar, com uma interface amigável e
              responsiva. É possível acessá-la de qualquer dispositivo!
            </p>
          </div>
        </div>
      </section>

      <section id="simple" class="simple">
        <div class="container simple__wrapper">
          <div class="simple__img">
            <img
              src="./assets/home/desktop/illustration-simple-ui.svg"
              alt="simple ui & ux example"
            />
          </div>
          <div class="simple__description">
            <h2 class="simple__heading">Simples e amigável</h2>
            <p class="simple__copy">
              Melhorando a usabilidade da nossa plataforma, desenvolvemos um
              aplicativo fácil de ser utilizado.
            </p>
          </div>
        </div>
      </section>

      <section id="benefits" class="benefits">
        <div class="container benefits__wrapper">
          <div class="benefit-card">
            <img
              class="benefit-card__img"
              src="./assets/home/desktop/admin.svg"
              alt=""
            />
            <h3 class="benefit-card__heading">Administração de dispositivos</h3>
            <p class="benefit-card__copy">
              Conecte dispositivos e monitore-os em tempo real.
            </p>
          </div>
          <div class="benefit-card">
            <img
              class="benefit-card__img"
              src="./assets/home/desktop/command.svg"
              alt=""
            />
            <h3 class="benefit-card__heading">Comandos personalizados</h3>
            <p class="benefit-card__copy">
              Personalize comandos conforme sua necessidade e escolha pessoal.
            </p>
          </div>
          <div class="benefit-card">
            <img
              class="benefit-card__img"
              src="./assets/home/desktop/actions.svg"
              alt=""
            />
            <h3 class="benefit-card__heading">Ações programadas</h3>
            <p class="benefit-card__copy">
              Automatize seus dispositivos para adaptá-los à sua rotina e
              preferências.
            </p>
          </div>
        </div>
      </section>

      <section id="ready" class="ready">
        <div class="container ready__wrapper">
          <h1 class="ready__heading">Preparado para começar?</h1>
          <form class="ready-form">
            <input
              aria-label="Email Address"
              class="input"
              type="email"
              placeholder="E-mail"
            />
            <button class="button primary ready-form__button" type="submit">
              Faça um orçamento
            </button>
          </form>
        </div>
      </section>
    </main>
    <footer id="footer" class="footer">
      <div class="container footer__wrapper">
        <img src="./assets/shared/desktop/logo.svg" alt="" />
        <nav class="footer__navigation">
          <ul class="footer-navigation__list">
            <li class="footer-navigation__item">
              <a class="footer-navigation__link" href="about.php">Sobre</a>
            </li>
            <li class="footer-navigation__item">
              <a class="footer-navigation__link" href="pricing.php">Planos</a>
            </li>
            <li class="footer-navigation__item">
              <a class="footer-navigation__link" href="contact.php">Contato</a>
            </li>
          </ul>
        </nav>
        <ul class="footer-social">
          <li class="footer-social__item">
            <a class="footer-social__link" href="index.php">
              <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z"
                  fill="#FBFCFE"
                  fill-rule="nonzero"
                />
              </svg>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="index.php">
              <svg width="24" height="20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24 2.557a9.83 9.83 0 01-2.828.775A4.932 4.932 0 0023.337.608a9.864 9.864 0 01-3.127 1.195A4.916 4.916 0 0016.616.248c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 1.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 17.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 2.557z"
                  fill="#FBFCFE"
                  fill-rule="nonzero"
                />
              </svg>
            </a>
          </li>
          <li class="footer-social__item">
            <a class="footer-social__link" href="index.php">
              <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.6 0H2.4C1.08 0 0 1.08 0 2.4v19.2C0 22.92 1.08 24 2.4 24h19.2c1.32 0 2.4-1.08 2.4-2.4V2.4C24 1.08 22.92 0 21.6 0zM7.2 20.4H3.6V9.6h3.6v10.8zM5.4 7.56c-1.2 0-2.16-.96-2.16-2.16 0-1.2.96-2.16 2.16-2.16 1.2 0 2.16.96 2.16 2.16 0 1.2-.96 2.16-2.16 2.16zm15 12.84h-3.6v-6.36c0-.96-.84-1.8-1.8-1.8-.96 0-1.8.84-1.8 1.8v6.36H9.6V9.6h3.6v1.44c.6-.96 1.92-1.68 3-1.68 2.28 0 4.2 1.92 4.2 4.2v6.84z"
                  fill="#FFF"
                  fill-rule="nonzero"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </footer>
    <script src="./js/index.js"></script>
  </body>
</html>
