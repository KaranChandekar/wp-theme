<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Young Nomads - Your SEO Partner</title>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/output.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-no-repeat bg-contain bg-bg-img">
  <!-- Navbar -->
  <nav>
    <a href="#" class="z-20">
      <!-- <h1 class="text-xl lg:text-3xl">YoungNomads</h1> -->
      <img class="lg:w-[150px] w-[100px]" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/companies/logo.png" alt="visibility">
    </a>

    <div class="flex items-center justify-end">
      <span class="z-20 block mx-2 text-3xl cursor-pointer lg:hidden">
        <ion-icon onclick="onToggleMenu(this)" name="menu" id="menu-icon""></ion-icon>
      </span>

      <div
        class=" px-4 lg:px-0 bg-no-repeat bg-cover bg-bg-img lg:bg-none z-10 fixed inset-0 w-full translate-x-[-100%]
          bg-[#0e1414] lg:bg-transparent shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static
          lg:shadow-none lg:translate-x-0" id="nav-links">
          <div class="flex flex-col h-full lg:space-x-10 lg:items-center lg:flex-row">
            
          <?php   wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                    'container'         => 'ul',
                    'container_class'   => '',
                    'container_id'      => '',
                      'menu_class'        => 'pt-24 space-y-8 lg:pt-0 lg:space-y-0 lg:flex lg:space-x-10',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'  => new WP_Bootstrap_Navwalker())
                        );
                      ?>

            <!-- <ul class="pt-24 space-y-8 lg:pt-0 lg:space-y-0 lg:flex lg:space-x-10">
              <li class="text-indigo-500 nav-link">
                <a href="/">Home</a>
              </li>
              <li class="nav-link">
                <a href="/about.php">About</a>
              </li>
              <li class="nav-link">
                <a href="/case-studies.php">Case Studies</a>
              </li>
              <li class="nav-link">
                <a href="/contact.php">Contact</a>
              </li>
            </ul> -->
            <button id="show-modal" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="nav-button"
              type="button">
              FREE AUDIT
            </button>
          </div>
    </div>
  </nav>