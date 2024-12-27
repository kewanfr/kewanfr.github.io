const menuBtn = document.getElementById('menu-btn');
const menuBurgerIcon = document.getElementById('menu-burger-icon');
const menuCloseIcon = document.getElementById('menu-close-icon');

menuBtn.addEventListener('click', function () {
  var menu = document.getElementById('mobile-nav');
  if (menu.classList.contains('hidden')) {
    menu.classList.remove('hidden');

    menuBurgerIcon.classList.add('hidden');
    menuCloseIcon.classList.remove('hidden');

  } else {
    menu.classList.add('hidden');

    menuBurgerIcon.classList.remove('hidden');
    menuCloseIcon.classList.add('hidden');
  }
});

function closeMenu() {
  var menu = document.getElementById('mobile-nav');
  menu.classList.add('hidden');

  menuBurgerIcon.classList.remove('hidden');
  menuCloseIcon.classList.add('hidden');
}

const projects = [
  {
    title: "Projet 1",
    description: "Description complète du Projet 1.",
    image: "https://github.com/kewanfr/grades-watcher/raw/main/assets/embed%20exemple.jpeg",
    date: "2024",
    technologies: ["React", "Node.js"],
    link: "#",
  },
  {
    title: "Projet 2",
    description: "Description complète du Projet 2.",
    image: "https://img.freepik.com/photos-gratuite/surface-abstraite-textures-mur-pierre-beton-blanc_74190-8189.jpg",
    date: "2023",
    technologies: ["Vue.js", "Firebase"],
    link: "#",
  },
  {
    title: "Projet 3",
    description: "Description complète du Projet 3.",
    image: "https://via.placeholder.com/300",
    date: "2022",
    technologies: ["Python", "Flask"],
    link: "#",
  },{
    title: "Projet 1",
    description: "Description complète du Projet 1.",
    image: "https://github.com/kewanfr/grades-watcher/raw/main/assets/embed%20exemple.jpeg",
    date: "2024",
    technologies: ["React", "Node.js"],
    link: "#",
  },
  {
    title: "Projet 2",
    description: "Description complète du Projet 2.",
    image: "https://img.freepik.com/photos-gratuite/surface-abstraite-textures-mur-pierre-beton-blanc_74190-8189.jpg",
    date: "2023",
    technologies: ["Vue.js", "Firebase"],
    link: "#",
  },
  {
    title: "Projet 3",
    description: "Description complète du Projet 3.",
    image: "https://via.placeholder.com/300",
    date: "2022",
    technologies: ["Python", "Flask"],
    link: "#",
  },{
    title: "Projet 1",
    description: "Description complète du Projet 1.",
    image: "https://github.com/kewanfr/grades-watcher/raw/main/assets/embed%20exemple.jpeg",
    date: "2024",
    technologies: ["React", "Node.js"],
    link: "#",
  },
  {
    title: "Projet 2",
    description: "Description complète du Projet 2.",
    image: "https://img.freepik.com/photos-gratuite/surface-abstraite-textures-mur-pierre-beton-blanc_74190-8189.jpg",
    date: "2023",
    technologies: ["Vue.js", "Firebase"],
    link: "#",
  },
  {
    title: "Projet 3",
    description: "Description complète du Projet 3.",
    image: "https://via.placeholder.com/300",
    date: "2022",
    technologies: ["Python", "Flask"],
    link: "#",
  },
];

let visibleProjects = 3; // Nombre de projets visibles au début
const projectsContainer = document.getElementById("projects-container");
const loadMoreBtn = document.getElementById("load-more");

function displayProjects() {
  projectsContainer.innerHTML = ""; // Réinitialise le conteneur
  projects.slice(0, visibleProjects).forEach((project) => {
    const card = `
      <a href="${project.link}" class="project-card">
        <img src="${project.image}" alt="${project.title}" />
        <div class="content">
          <!-- Infos visibles -->
          <div class="info">
            <h3>${project.title}</h3>
            <p class="date">${project.date}</p>
            <div class="tags">
              ${project.technologies.map((tech) => `<span>${tech}</span>`).join("")}
            </div>
          </div>
          <!-- Description au survol -->
          <div class="description">${project.description}</div>
        </div>
      </a>
    `;
    projectsContainer.innerHTML += card;
  });
}

// Bouton "Charger plus"
loadMoreBtn.addEventListener("click", () => {
  visibleProjects += 3; // Affiche 3 projets supplémentaires
  displayProjects();
  if (visibleProjects >= projects.length) {
    loadMoreBtn.style.display = "none"; // Cache le bouton si plus de projets
  }
});

// Charge les projets au début
displayProjects();


const skills = [
  { name: "JavaScript", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" },
  { name: "Python", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" },
  { name: "PHP", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" },
  { name: "Docker", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" },
  // Ajoute d'autres compétences ici
];

const container = document.querySelector("#skills .grid");

// skills.forEach((skill) => {
//   const badge = `
//     <div class="skill-badge">
//       <img src="${skill.icon}" alt="${skill.name}" />
//       <div class="overlay">
//         <span>${skill.name}</span>
//       </div>
//     </div>
//   `;
//   container.innerHTML += badge;
// });