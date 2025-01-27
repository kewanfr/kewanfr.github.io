<?php
$projet_data = isset($_POST['projet']) ? $_POST['projet'] : null;
$projet_id = isset($_GET['id']) ? $_GET['id'] : -1;

if ($projet_data) {
  $projet_id = $projet_data['id'];
}

if ($projet_data === null) {
  if ($projet_id === -1) {
    header('Location: /#projets');
    exit();
  }

  $projet_call = file_get_contents('https://kewan.fr/portfolio/projets.php?id=' . $projet_id);

  if ($projet_call === false || $projet_call === null || isset($projet_call['error'])) {
    header('Location: /#projets');
    exit();
  }

  $projet_data = json_decode($projet_call, true);
}

// require_once 'portfolio/visit.php';

if (!isset($projet_data['id'])) {
  header('Location: /#projets');
  exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/src/css/style.css" />


  <title>Projet <?= $projet_data['name'] ?> - Kéwan Bernier</title>
    <meta 
      name="description" 
      content="Découvrez le projet <?= $projet_data['name'] ?> réalisé par Kéwan Bernier, étudiant en BUT informatique à l'IUT de Nantes. Passionné par l'informatique et l'électronique depuis petit." />
    

    <meta property="og:title" content="Projet <?= $projet_data['name'] ?> - Kéwan Bernier" />
    <meta property="og:description" content="Découvrez le projet <?= $projet_data['name'] ?> réalisé par Kéwan Bernier, étudiant en BUT informatique à l'IUT de Nantes. Passionné par l'informatique et l'électronique depuis petit." />
    <meta property="og:image" content="https://kewan.fr/src/img/banner.jpg" />
    <meta property="og:url" content="https://kewan.fr/projet.php?id=<?= $projet_data['id'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Kéwan Bernier" />
    <meta property="og:locale" content="fr_FR" />

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="/src/vendor/aos/aos.css" rel="stylesheet" />
  <!-- href="./src/vendor/fontawesome-all.min.css" -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet" />
  <script src="/src/vendor/aos/aos.js"></script>
</head>

<body>
  <div class="min-h-screen bg-background text-foreground overflow-hidden">
    <!-- class="h-14 flex items-center sticky top-0 z-10 p-4 justify-between bg-background shadow-md" -->
    <header
      class="flex h-14 items-center justify-between shadow-md fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-sm">
      <a
        class="relative flex items-center justify-center group gap-2"
        href="#header"
        style="width: fit-content; margin: 18px">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-6 w-6 transition-transform duration-500 transform group-hover:translate-x-[4.55rem]"
          style="margin-right: 3.75rem">
          <polyline points="8 6 2 12 8 18"></polyline>
        </svg>

        <span
          class="absolute inset-0 flex items-center justify-center text-lg font-medium opacity-100 whitespace-nowrap transition-opacity duration-500 group-hover:opacity-0">
          Kéwan Bernier
        </span>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-6 w-6 transition-transform duration-500 transform group-hover:-translate-x-[4.75rem]"
          style="margin-left: 4.5rem">
          <polyline points="7,18 12,5" />
          <polyline points="16 18 22 12 16 6"></polyline>
        </svg>
      </a>

      <nav class="gap-4 sm:gap-6 md:flex hidden">
        <a
          href="/#about"
          class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer">
          À propos
        </a>
        <a
          href="/#projets"
          class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer">
          Projets
        </a>
        <a
          class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          href="/#skills">
          Compétences
        </a>
        <a
          class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          href="/#cv">
          CV
        </a>
        <a
          class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          href="/#blog">
          Blog
        </a>
        <a
          class="text-lg font-medium mr-4 relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          href="#contact">
          Contact
        </a>
      </nav>
      <button id="menu-btn" class="md:hidden text-lg font-medium">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          id="menu-burger-icon"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7" />
        </svg>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 hidden"
          id="menu-close-icon"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </header>

    <div
      id="mobile-nav"
      class="fixed inset-0 z-40 bg-background/95 backdrop-blur-sm flex items-center justify-center hidden">
      <nav class="flex flex-col space-y-4 text-center">
        <a
          href="/#about"
          class="text-muted-foreground hover:text-primary transition-colors duration-300"
          onclick="closeMenu()">À propos</a>
        <a
          href="/#skills"
          class="text-muted-foreground hover:text-primary transition-colors duration-300"
          onclick="closeMenu()">Compétences</a>
        <a
          href="/#projets"
          class="text-muted-foreground hover:text-primary transition-colors duration-300"
          onclick="closeMenu()">Projets</a>
        <a
          href="/#contact"
          class="text-muted-foreground hover:text-primary transition-colors duration-300"
          onclick="closeMenu()">Contact</a>
      </nav>
    </div>


    <section
      class="w-full py-12 md:py-24 lg:py-32 align-middle pr-0"
      id="projet-details">
      <div class="px-4 md:px-6">
        <a
          href="/#projets"
          class="text-primary text-xl font-medium hover:text-accent transition-colors duration-300">
          <i class="fas fa-arrow-left mr-2 mt-2"></i>
          Retour aux projets</a>
        <h2 class="text-3xl font-bold sm:text-5xl xl:text-6xl  text-white mt-14">
          <?= $projet_data['name'] ?>
        </h2>
        <p class="text-lg text-white mt-4">
          <?= $projet_data['description'] ?>
        </p>
        <p class="text-md text-gray-400 mt-2">
          Date du projet : <?= $projet_data['date'] ?>
        </p>

        <div class="flex flex-col md:flex-row gap-4">

          <div class="w-full md:w-1/2 mt-12">

            <h3 class="text-2xl font-bold text-white  mb-4">Technologies</h3>
            <ul id="stack-badges" class="text-base text-white flex flex-wrap gap-4">
              <?php if (isset($projet_data['tags']) && count($projet_data['tags']) > 0) { ?>
                <?php foreach ($projet_data['tags'] as $tag) { ?>
                  <li class="bg-primary/75 text-white py-1 px-2 rounded-md"><?= $tag ?></li>
                <?php } ?>
              <?php } else { ?>
                <li class="bg-primary/75 text-white py-1 px-2 rounded-md">Aucune information renseignée</li>
              <?php } ?>
            </ul>
            <h3 class="text-2xl font-bold text-white mb-4 mt-9">Description</h3>
            <p class="text-lg text-white">
              <?= $projet_data['page'] == '' ? 'Aucune description disponible' : $projet_data['page'] ?>
            </p>

            <div class="mt-10">
              <?php if ($projet_data['repo_url'] != '') { ?>
                <a
                  href="<?= $projet_data['repo_url'] ?>"
                  target="_blank"
                  class="bg-accent text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition-colors duration-300 mr-8">Code
                  <i class="fas fa-external-link-alt ml-2"></i>
                </a>
              <?php } ?>

              <?php if ($projet_data['demo_url'] != '') { ?>
                <a
                  href="<?= $projet_data['demo_url'] ?>"
                  target="_blank"
                  class="bg-accent text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition-colors duration-300">Demo
                  <i class="fas fa-external-link-alt ml-2"></i>
                </a>
              <?php } ?>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <?php if ($projet_data['banner'] != '') { ?>
              <img
                src="<?= str_replace('./src', "/src", $projet_data['banner']) ?>"
                alt="Projet Portfolio"
                class="w-full h-auto rounded-lg backdrop-blur-sm" />
            <?php } ?>
          </div>
        </div>

      </div>
    </section>


  </div>

  <script src="/src/js/urls.js"></script>
  <script src="/src/js/funcs.js"></script>
</body>

</html>