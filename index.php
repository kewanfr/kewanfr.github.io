<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kéwan Bernier - Étudiant Futur Développeur full-stack</title>
    <link rel="stylesheet" href="./src/css/style.css" />
    <meta 
      name="description" 
      content="Kéwan Bernier, étudiant en BUT informatique à l'IUT de Nantes. Passionné par l'informatique et l'électronique depuis petit, je suis en constante recherche de nouvelles technologies."
    />

    <meta property="og:title" content="Kéwan Bernier - Étudiant Futur Développeur full-stack" />
    <meta property="og:description" content="Kéwan Bernier, étudiant en BUT informatique à l'IUT de Nantes. Passionné par l'informatique et l'électronique depuis petit, je suis en constante recherche de nouvelles technologies." />
    <meta property="og:image" content="https://kewan.fr/src/img/me.png" />
    <meta property="og:url" content="https://kewan.fr" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Kéwan Bernier" />
    <meta property="og:locale" content="fr_FR" />

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <link href="./src/vendor/aos/aos.css" rel="stylesheet" />
    <!-- href="./src/vendor/fontawesome-all.min.css" -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      rel="stylesheet"
    />
    <script src="./src/vendor/aos/aos.js"></script>
  </head>
  <body>
    <div class="min-h-screen bg-background text-foreground overflow-hidden">
      <!-- class="h-14 flex items-center sticky top-0 z-10 p-4 justify-between bg-background shadow-md" -->
      <header
        class="flex h-14 items-center justify-between shadow-md fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-sm"
      >
        <a
          class="relative flex items-center justify-center group gap-2"
          href="#header"
          style="width: fit-content; margin: 18px"
        >
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
            style="margin-right: 3.75rem"
            alt="Icon < Kéwan Bernier"
          >
            <polyline points="8 6 2 12 8 18"></polyline>
          </svg>

          <span
            class="absolute inset-0 flex items-center justify-center text-lg font-medium opacity-100 whitespace-nowrap transition-opacity duration-500 group-hover:opacity-0"
          >
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
            style="margin-left: 4.5rem"
            alt="Icon Kéwan Bernier />"
          >
            <polyline points="7,18 12,5" />
            <polyline points="16 18 22 12 16 6"></polyline>
          </svg>
        </a>

        <nav class="gap-4 sm:gap-6 md:flex hidden">
          <a
            href="#about"
            class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          >
            À propos
          </a>
          <a
            href="#projets"
            class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
          >
            Projets
          </a>
          <a
            class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
            href="#skills"
          >
            Compétences
          </a>
          <a
            class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
            href="#cv"
          >
            CV
          </a>
          <a
            class="text-lg font-medium relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
            href="#blog"
          >
            Blog
          </a>
          <a
            class="text-lg font-medium mr-4 relative after:bg-white after:absolute after:h-[1] after:w-0 after:bottom-0 after:left-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer"
            href="#contact"
          >
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
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16m-7 6h7"
            />
          </svg>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 hidden"
            id="menu-close-icon"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </header>

      <!-- <nav id="mobile-nav" class="hidden md:hidden flex-col gap-4 p-4 bg-primary text-primary-foreground">
        <a href="#about" class="text-lg font-medium">À propos</a>
        <a href="#projets" class="text-lg font-medium">Projets</a>
        <a href="#skills" class="text-lg font-medium">Compétences</a>
        <a href="#CV" class="text-lg font-medium">CV</a>
      </nav> -->

      <div
        id="mobile-nav"
        class="fixed inset-0 z-40 bg-background/95 backdrop-blur-sm flex items-center justify-center hidden"
      >
        <nav class="flex flex-col space-y-4 text-center">
          <a
            href="#about"
            class="text-muted-foreground hover:text-primary transition-colors duration-300"
            onclick="closeMenu()"
            >À propos</a
          >
          <a
            href="#projets"
            class="text-muted-foreground hover:text-primary transition-colors duration-300"
            onclick="closeMenu()"
            >Projets</a
          >
          <a
            href="#skills"
            class="text-muted-foreground hover:text-primary transition-colors duration-300"
            onclick="closeMenu()"
            >Compétences</a
          >
          <a
            href="#cv"
            class="text-muted-foreground hover:text-primary transition-colors duration-300"
            onclick="closeMenu()"
            >CV</a
          >
          <a
            href="#contact"
            class="text-muted-foreground hover:text-primary transition-colors duration-300"
            onclick="closeMenu()"
            >Contact</a
          >
        </nav>
      </div>

      <main class="container mx-auto px-4 py-24 flex-1" data-aos="fade-up">
        <section
          class="min-h-[100vh] w-full py-12 md:py-24 lg:py-32 align-middle pr-0"
          id="about"
        >
          <div class="px-4 md:px-6">
            <!-- src="./src/img/placeholder.svg" -->
            <!-- src="./src/img/placeholder.svg" -->
            <img
              src="./src/img/me.png"
              width="400"
              height="400"
              alt="Photo de Kéwan Bernier, sur un bureau (extrait d'une piece de théâtre)"
              class="aspect-square mb-6 overflow-hidden w-52 rounded-xl object-cover lg:order-last"
            />
            <div
              class="grid gap-6 lg:grid-cols-[1fr_500px] lg:gap-12 xl:grid-cols-[2fr_500px]"
            >
              <div class="flex flex-col justify-center space-y-4">
                <div class="space-y-2">
                  <h1 class="text-3xl font-bold sm:text-5xl xl:text-6xl/none">
                    Kéwan Bernier
                  </h1>
                  <h3 class="text-2xl text-muted-backgroud">
                    Étudiant Futur Développeur full-stack
                  </h3>
                  <br />
                  <p class="max-w-[600px] text-muted-backgroud md:text-xl">
                    Actuellement étudiant en BUT informatique à l'IUT de
                    Nantes, j'ai toujours été passionné par l'informatique et
                    l'électronique depuis petit. <br /><br />

                    J'ai commencé à apprendre la programmation et
                    l'électronique il y a près de 8 ans, en apprenant l'Arduino
                    en 2016. <br /><br />

                    Depuis lors, je n'ai jamais arrêté d'apprendre et
                    j'apprécie découvrir de nouvelles technologies. <br />
                    <br />

                    Après mon BUT, je souhaiterais m'orienter vers une école
                    d'ingénieur en informatique.
                  </p>
                </div>
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                  <a
                    class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors relative overflow-hidden group"
                    href="#projets"
                  >
                    <span
                      class="absolute inset-0 bg-secondary transform -skew-x-12 scale-150 transition-transform duration-500 ease-in-out group-hover:translate-x-full"
                    ></span>
                    <span class="relative z-10">Voir mes projets</span>
                  </a>

                  <a
                    class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors relative overflow-hidden group"
                    href="#cv"
                  >
                    <span
                      class="absolute inset-0 bg-secondary transform -skew-x-12 scale-150 transition-transform duration-500 ease-in-out group-hover:translate-x-full"
                    ></span>
                    <span class="relative z-10">Mon CV</span>
                  </a>
                </div>
              </div>

              <div class="flex items">
                <!-- En résumé -->
                <div class="flex flex-col gap-4 mr-8">
                  <div class="flex flex-col gap-4">
                    <ul class="list-item pl-5 space-y-2">
                      <li>
                        <span class="font-semibold underline">🎂</span> - 17
                        ans
                      </li>

                      <li><span class="font-semibold">📍</span> - Nantes</li>

                      <li>
                        <span class="font-semibold">🎓</span> - BUT
                        informatique à l'IUT de Nantes
                      </li>

                      <li>
                        <span class="font-semibold">💻</span> - Passionné par
                        l'informatique et l'électronique depuis petit
                      </li>

                      <li>
                        <span class="font-semibold">🚀</span> - 8 ans
                        d'expérience en programmation et en informatique
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="w-full py-12 md:py-24 lg:py-32 align-middle pr-0"
          id="projets"
        >
          <div class="px-4 md:px-6">
            <h2 class="text-3xl font-bold sm:text-5xl xl:text-6xl mb-8">
              Mes projets
            </h2>
            <div
              id="projects-container"
              class="grid gap-6 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4"
            >
              <!-- Les cartes seront injectées ici -->
              <!-- <a href="${project.link}" class="project-card">
                <img src="${project.image}" alt="${project.title}" />
                <div class="content">
                  <-- Infos visibles -
                  <div class="info">
                    <h3>${project.title}</h3>
                    <p class="date">${project.date}</p>
                    <div class="tags">
                      ${project.technologies.map((tech) => `<span>${tech}</span>`).join("")}
                    </div>
                  </div>
                  -- Description au survol -
                  <div class="description">${project.description}</div>
                </div>
              </a> -->
            </div>
            <div class="mt-8 text-center">
              <button
                id="load-more"
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-300"
              >
                Charger plus de projets
              </button>
            </div>
          </div>
        </section>

        <section
          id="skills"
          class="w-full py-12 md:py-24 lg:py-32 mt-10 animate-fadeIn scroll-mt-14"
        >
          <div class="px-4 md:px-6">
            <h2
              class="text-3xl font-bold sm:text-5xl xl:text-6xl mb-8 text-center"
            >
              Mes compétences
            </h2>
            <div class="grid gap-12"></div>
          </div>
        </section>

        <section id="cv" class="w-full py-12 md:py-24 lg:py-32 scroll-mt-14">
          <div class="px-4 md:px-6">
            <h2
              class="text-3xl font-bold sm:text-5xl xl:text-6xl mb-8 text-center"
            >
              Curriculum Vitae
            </h2>

            <!-- Catégorie École -->
            <div class="mb-12">
              <h3 class="text-2xl font-semibold mb-6 text-primary">
                🎓 Formation
              </h3>
              <div class="relative border-l border-muted-backgroud">
                <div class="mb-10 ml-6">
                  <div
                    class="absolute -left-3 w-6 h-6 bg-primary rounded-full"
                  ></div>
                  <time
                    class="mb-1 text-sm font-normal leading-none text-muted-backgroud"
                  >
                    Septembre 2024 - Aujourd'hui
                  </time>
                  <h4 class="text-lg font-semibold text-foreground">
                    BUT Informatique
                  </h4>
                  <p class="text-muted-backgroud">
                    Université de Nantes, IUT Joffre
                  </p>
                </div>
                <div class="mb-10 ml-6">
                  <div
                    class="absolute -left-3 w-6 h-6 bg-primary rounded-full"
                  ></div>
                  <time
                    class="mb-1 text-sm font-normal leading-none text-muted-backgroud"
                  >
                    2021 - 2024
                  </time>
                  <h4 class="text-lg font-semibold text-foreground">
                    Bac Général Maths/NSI - Mention Très Bien
                  </h4>
                  <p class="text-muted-backgroud">
                    Lycée Léonard de Vinci, Montaigu-Vendée
                  </p>
                </div>
              </div>
            </div>

            <!-- Catégorie Expériences Professionnelles -->
            <div class="mb-12">
              <h3 class="text-2xl font-semibold mb-6 text-primary">
                💼 Expériences professionnelles
              </h3>
              <div class="relative border-l border-muted-backgroud">
                <div class="mb-10 ml-6">
                  <div
                    class="absolute -left-3 w-6 h-6 bg-primary rounded-full"
                  ></div>
                  <time
                    class="mb-1 text-sm font-normal leading-none text-muted-backgroud"
                  >
                    Juin 2022
                  </time>
                  <h4 class="text-lg font-semibold text-foreground">
                    Stage de Seconde - GIE Kereis, Saint-Herblain
                  </h4>
                  <p class="text-muted-backgroud">
                    Découverte de l'équipe self care (espace assuré),
                    observation de l'équipe backend (Java SpringBoot) et
                    frontend (React) <br /><br />
                    Réalisation d'un ticket (modification du frontend) et
                    découverte de l'intégration et du déploiement.
                  </p>
                </div>

                <div class="mb-10 ml-6">
                  <div
                    class="absolute -left-3 w-6 h-6 bg-primary rounded-full"
                  ></div>
                  <time
                    class="mb-1 text-sm font-normal leading-none text-muted-backgroud"
                  >
                    Janvier 2021 et Juin 2022
                  </time>
                  <h4 class="text-lg font-semibold text-foreground">
                    Stages en 3ème et en Première - U Tech (U GIE Iris),
                    Carquefou
                  </h4>
                  <p class="text-muted-backgroud">
                    Entretiens avec chaque panel de métiers de l'entreprise:
                    Développement application/site, assistance, informatique
                    des entrepôts, réseau, etc... <br /><br />
                    Ces stages enrichissants m'ont permis des découvrir les
                    métiers de l'informatique, ainsi que les méthodes de
                    gestion de projets, notamment la méthode Agile.
                  </p>
                </div>
              </div>
            </div>

            <!-- Lien pour Télécharger -->
            <div class="mt-12 text-center">
              <a
                href="./src/files/cv_kewan.pdf"
                target="_blank"
                class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-primary-foreground shadow transition-colors relative overflow-hidden group"
              >
                <span
                  class="absolute inset-0 bg-secondary transform -skew-x-12 scale-150 transition-transform duration-500 ease-in-out group-hover:translate-x-full"
                ></span>
                <span class="relative z-10">Télécharger mon CV</span>
              </a>
            </div>
          </div>
        </section>

        <!-- <section id="blog" class="w-full py-12 md:py-24 lg:py-32 scroll-mt-14">
          <div class="px-4 md:px-6">
            <h2
              class="text-3xl font-bold sm:text-5xl xl:text-6xl mb-8 text-center"
            >
              Articles
            </h2>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
              -- Article 1 --
              <div
                class="blog-card group relative overflow-hidden rounded-lg bg-background shadow-lg"
              >
                <img
                  src="https://via.placeholder.com/300"
                  alt="Article 1"
                  class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div class="p-4">
                  <h3 class="text-xl font-bold mb-2 text-foreground">
                    Article 1
                  </h3>
                  <p class="text-sm text-muted-backgroud mb-4">
                    Découvrez les bases de React pour démarrer vos projets
                    front-end.
                  </p>
                  <a href="#" class="text-primary font-medium hover:underline"
                    >Lire plus →</a
                  >
                </div>
              </div>
              <div
                class="blog-card group relative overflow-hidden rounded-lg bg-background shadow-lg"
              >
                <img
                  src="https://via.placeholder.com/300"
                  alt="Article 2"
                  class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div class="p-4">
                  <h3 class="text-xl font-bold mb-2 text-foreground">
                    Article 2
                  </h3>
                  <p class="text-sm text-muted-backgroud mb-4">
                    Guide complet sur l'utilisation de Docker pour vos
                    déploiements.
                  </p>
                  <a href="#" class="text-primary font-medium hover:underline"
                    >Lire plus →</a
                  >
                </div>
              </div>
              <div
                class="blog-card group relative overflow-hidden rounded-lg bg-background shadow-lg"
              >
                <img
                  src="https://via.placeholder.com/300"
                  alt="Article 3"
                  class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div class="p-4">
                  <h3 class="text-xl font-bold mb-2 text-foreground">
                    Article 3
                  </h3>
                  <p class="text-sm text-muted-backgroud mb-4">
                    Apprenez les meilleures pratiques pour travailler avec Git.
                  </p>
                  <a href="#" class="text-primary font-medium hover:underline"
                    >Lire plus →</a
                  >
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <section
          id="contact"
          class="w-full py-12 md:py-24 lg:py-32 scroll-mt-14"
        >
          <div class="px-4 md:px-6">
            <h2
              class="text-3xl font-bold sm:text-5xl xl:text-6xl mb-8 text-center"
            >
              Me Contacter
            </h2>

            <div class="flex flex-col items-center space-y-6">
              <p class="text-lg text-muted-backgroud text-center">
                Retrouvez-moi facilement sur les plateformes suivantes :
              </p>

              <!-- Icônes de contact -->
              <div
                class="grid gap-10 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4"
              >
                <!-- Email -->
                <a
                  href="mailto:contact@kewan.fr"
                  class="flex flex-col items-center justify-center p-8 rounded-lg bg-background shadow-md hover:shadow-lg transition transform hover:scale-105 group"
                  title="Email"
                >
                  <i
                    class="fas fa-envelope text-primary text-[4rem] mb-2 transition"
                  ></i>
                  <span class="text-base font-medium text-foreground"
                    >Email</span
                  >
                  <span class="text-sm text-muted-backgroud"
                    >contact@kewan.fr</span
                  >
                </a>

                <!-- LinkedIn -->
                <a
                  href="https://linkedin.com/in/kéwan-bernier-68a901177"
                  target="_blank"
                  class="flex flex-col items-center justify-center p-8 rounded-lg bg-background shadow-md hover:shadow-lg transition transform hover:scale-105 group"
                  title="LinkedIn"
                >
                  <i
                    class="fab fa-linkedin text-primary text-[4rem] mb-2 transition"
                  ></i>
                  <span class="text-base font-medium text-foreground"
                    >LinkedIn</span
                  >
                  <span class="text-sm text-muted-backgroud"
                    >Kéwan Bernier</span
                  >
                </a>

                <!-- GitHub -->
                <a
                  href="https://github.com/kewanfr"
                  target="_blank"
                  class="flex flex-col items-center justify-center p-8 rounded-lg bg-background shadow-md hover:shadow-lg transition transform hover:scale-105 group"
                  title="GitHub"
                >
                  <i
                    class="fab fa-github text-primary text-[4rem] mb-2 transition"
                  ></i>
                  <span class="text-base font-medium text-foreground"
                    >GitHub</span
                  >
                  <span class="text-sm text-muted-backgroud">@kewanfr</span>
                </a>

                <!-- Instagram -->
                <a
                  href="https://instagram.com/kewanb_"
                  target="_blank"
                  class="flex flex-col items-center justify-center p-8 rounded-lg bg-background shadow-md hover:shadow-lg transition transform hover:scale-105 group"
                  title="Instagram"
                >
                  <i
                    class="fab fa-instagram text-primary text-[4rem] mb-2 transition"
                  ></i>
                  <span class="text-base font-medium text-foreground"
                    >Instagram</span
                  >
                  <span class="text-sm text-muted-backgroud">@kewanb_</span>
                </a>
              </div>
            </div>

            <div id="result-div" class="mt-12 hidden bg-green-700 bg-red-700 p-4 rounded-lg">
              <span id="result_msg" class="text-lg text-muted-backgroud"></span>
            </div>

            <!-- Formulaire de contact -->
            <div class="mt-12">
              <h3 class="text-2xl font-semibold mb-6 text-primary">
                Contactez-moi
              </h3>
              <form
                action=""
                method="POST"
                class="grid gap-6 grid-cols-1 sm:grid-cols-2"
                id="contact-form"
              >
                <div>
                  <label for="name" class="text-muted-backgroud">Nom</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    class="w-full p-3 rounded-lg bg-background border border-muted-backgroud text-muted-backgroud"
                    required
                  />
                </div>
                <div>
                  <label for="email" class="text-muted-backgroud">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full p-3 rounded-lg bg-background border border-muted-backgroud text-muted-backgroud"
                    required
                  />
                </div>
                <div class="col-span-2">
                  <label for="message" class="text-muted-backgroud"
                    >Message</label
                  >
                  <textarea
                    name="message"
                    id="message"
                    class="w-full p-3 rounded-lg bg-background border border-muted-backgroud text-muted-backgroud"
                    rows="6"
                    required
                  ></textarea>
                </div>
                <div class="col-span-2">
                  <button
                    type="submit"
                    class="w-full p-3 rounded-lg bg-primary text-primary-foreground font-medium hover:bg-primary-700 transition-colors"
                  >
                    Envoyer
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </main>
      <footer class="bg-grey text-muted-foreground py-8 text-center">
        <p>Développé avec ❤️ par Kéwan Bernier - <?= date('Y') ?></p>
      </footer>
    </div>

    <script src="./src/js/funcs.js"></script>
    <script src="./src/js/CONST.js"></script>
    <script src="./src/js/script.js"></script>
    <script src="./src/js/contact.js"></script>
  </body>
</html>
