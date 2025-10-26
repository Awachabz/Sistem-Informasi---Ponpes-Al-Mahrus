document.addEventListener('DOMContentLoaded', function () {
  const dropdowns = document.querySelectorAll('.nav-item.dropdown');

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
    toggle.addEventListener('click', function () {
      dropdown.classList.toggle('show');
      const menu = toggle.nextElementSibling;
      menu.classList.toggle('show');
    });
  });
});
