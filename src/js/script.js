const menuBtn = document.getElementById("menu-btn");
const menuBurgerIcon = document.getElementById("menu-burger-icon");
const menuCloseIcon = document.getElementById("menu-close-icon");

menuBtn.addEventListener("click", function () {
  var menu = document.getElementById("mobile-nav");
  if (menu.classList.contains("hidden")) {
    menu.classList.remove("hidden");

    menuBurgerIcon.classList.add("hidden");
    menuCloseIcon.classList.remove("hidden");
  } else {
    menu.classList.add("hidden");

    menuBurgerIcon.classList.remove("hidden");
    menuCloseIcon.classList.add("hidden");
  }
});

function closeMenu() {
  var menu = document.getElementById("mobile-nav");
  menu.classList.add("hidden");

  menuBurgerIcon.classList.remove("hidden");
  menuCloseIcon.classList.add("hidden");
}

var projects = [
  {
    id: 1,
    name: "portfolio",
    // description: "Le site que vous visitez actuellement.",
    page: null,
    repo_url: "https://github.com/kewanfr/kewanfr.github.io",
    demo_url: "https://kewan.fr",
    banner: './src/img/projets/portfolio.jpg',
    date: "Décembre 2024",
    tags: ["HTML/CSS/JS", "PHP", "MySQL"],
    tags_pinned: ["Node.Js", "Discord.js"],
  },
  {
    id: 2,
    // grades watcher -> mettre le nom en français
    name: "grades-watcher",
    // description: "Bot qui surveille mes notes à l'IUT.",
    page: null,
    repo_url: "https://github.com/kewanfr/grades-watcher",
    demo_url: null,
    banner: './src/img/projets/grades.jpg',
    date: "Décembre 2024",
    tags: ["Node.Js", "Discord.js"],
    tags_pinned: ["Node.Js", "Discord.js"],
  }
];

let visibleProjects = DEFAULT_VISIBLE_PROJECTS; // Nombre de projets visibles au début
const projectsContainer = document.getElementById("projects-container");
const loadMoreBtn = document.getElementById("load-more");

fetchProjects().then((data) => {
  projects = data;
  displayProjects();
});

function displayProjects() {
  projectsContainer.innerHTML = ""; // Réinitialise le conteneur
  projects.slice(0, visibleProjects).forEach((project) => {
    const card = `
      <a href="/projet/${project.id}" class="project-card">
        ${project.banner ? `<img src="${project.banner}" alt="${project.name}" />` : "<img src='./src/img/projets/default.jpg' alt='default' />"}
        <img src="${project.banner}" alt="${project.name}" />
        <div class="content">
          <!-- Infos visibles -->
          <div class="info">
            <h3>${project.name || ""}</h3>
            <p class="date">${project.date || ""}</p>
            <div class="tags">
              ${(project.tags_pinned || project.tags).map((tech) => `<span>${tech}</span>`).join("")}
            </div>
          </div>
          <!-- Description au survol -->
          <div class="description">${project.description || ""}</div>
        </div>
      </a>
    `;
    projectsContainer.innerHTML += card;
  });
}

// Bouton "Charger plus"
loadMoreBtn.addEventListener("click", () => {
  visibleProjects += NUMBER_OF_PROJECTS_TO_LOAD; // Affiche 3 projets supplémentaires
  displayProjects();
  if (visibleProjects >= projects.length) {
    loadMoreBtn.style.display = "none"; // Cache le bouton si plus de projets
  }
});

// Charge les projets au début
displayProjects();

var skills = {
  Langages: [
    {
      id: 1,
      name: "JavaScript",
      icon: "./src/img/skills/javascript.svg",
      category_id: 1,
      cat_name: "Langages",
    },
    {
      id: 2,
      name: "Python",
      icon: "./src/img/skills/python.svg",
      category_id: 1,
      cat_name: "Langages",
    },
    {
      id: 3,
      name: "PHP",
      icon: "./src/img/skills/php.svg",
      category_id: 1,
      cat_name: "Langages",
    },
    {
      id: 4,
      name: "Golang",
      icon: "./src/img/skills/golang.svg",
      category_id: 1,
      cat_name: "Langages",
    },
  ],
  "Frameworks et Technologies": [
    {
      id: 5,
      name: "Node.js",
      icon: "./src/img/skills/nodejs.svg",
      category_id: 2,
      cat_name: "Frameworks et Technologies",
    },
    {
      id: 6,
      name: "Vue.js",
      icon: "./src/img/skills/vuejs.svg",
      category_id: 2,
      cat_name: "Frameworks et Technologies",
    },
    {
      id: 7,
      name: "React",
      icon: "./src/img/skills/react.svg",
      category_id: 2,
      cat_name: "Frameworks et Technologies",
    },
    {
      id: 8,
      name: "MySQL",
      icon: "./src/img/skills/mysql.svg",
      category_id: 2,
      cat_name: "Frameworks et Technologies",
    },
  ],
  "Outils et Environnements": [
    {
      id: 9,
      name: "Docker",
      icon: "./src/img/skills/docker.svg",
      category_id: 3,
      cat_name: "Outils et Environnements",
    },
    {
      id: 10,
      name: "Linux",
      icon: "./src/img/skills/linux.svg",
      category_id: 3,
      cat_name: "Outils et Environnements",
    },
    {
      id: 11,
      name: "Git",
      icon: "./src/img/skills/git.svg",
      category_id: 3,
      cat_name: "Outils et Environnements",
    },
    {
      id: 12,
      name: "GitHub",
      icon: "./src/img/skills/github.svg",
      category_id: 3,
      cat_name: "Outils et Environnements",
    },
  ],
};

fetchSkills();

fetchSkills().then((data) => {
  skills = data
  displaySkills();
});
displaySkills();
function displaySkills() {
  const container = document.querySelector("#skills .grid");

  container.innerHTML = "";

  for (let category in skills) {
    const cat_skills = skills[category];

    const skillCatDivEl = document.createElement("div");

    const skillCatTitleEl = document.createElement("h3");
    skillCatTitleEl.className = "text-2xl font-semibold mb-4 text-center";
    skillCatTitleEl.innerHTML = category;

    const skillsDivEL = document.createElement("div");
    skillsDivEL.className = "flex flex-wrap justify-center gap-4";

    skillCatDivEl.appendChild(skillCatTitleEl);

    for (let i in cat_skills) {
      const skillBadgeEl = document.createElement("div");
      skillBadgeEl.className = "skill-badge";

      const imgEL = document.createElement("img");
      imgEL.src = cat_skills[i].icon;
      imgEL.alt = cat_skills[i].name;

      const overlayEl = document.createElement("div");
      overlayEl.className = "overlay";

      const spanEl = document.createElement("span");
      spanEl.innerText = cat_skills[i].name;

      overlayEl.appendChild(spanEl);

      skillBadgeEl.appendChild(imgEL);
      skillBadgeEl.appendChild(overlayEl);

      skillsDivEL.appendChild(skillBadgeEl);
    }
    skillCatDivEl.appendChild(skillsDivEL);

    container.appendChild(skillCatDivEl);
  }
}

AOS.init();
