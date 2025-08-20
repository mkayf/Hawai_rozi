import './bootstrap';


// Navbar account dropdown toggling

document.querySelectorAll('.submenu-toggle').forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let nextMenu = el.nextElementSibling;
        let isShown = nextMenu.classList.contains('show');

        // Close all other submenus in same parent
        el.closest('.dropdown-menu').querySelectorAll('.dropdown-menu').forEach(function (menu) {
          menu.classList.remove('show');
        });

        // Toggle current submenu
        if (!isShown) {
          nextMenu.classList.add('show');
        }
      });
        });

    // Close all submenus when parent dropdown hides
    document.querySelectorAll('.dropdown').forEach(function (dd) {
      dd.addEventListener('hide.bs.dropdown', function () {
        dd.querySelectorAll('.dropdown-menu').forEach(function (menu) {
          menu.classList.remove('show');
        });
      });
    });
