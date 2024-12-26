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