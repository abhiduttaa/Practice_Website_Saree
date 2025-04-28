
const menuToggle = document.querySelector('.menu-toggle');
const navber = document.querySelector('.navber');
menuToggle.addEventListener('click', () => {
  navber.classList.toggle('active');
});

const loginIcon = document.getElementById('loginIcon');
const dropdownMenu = document.getElementById('dropdownMenu');

loginIcon.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});

  // Optional: hide the dropdown if clicked outside
document.addEventListener('click', function(e) {
  if (!loginIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.add('hidden');
  }
});

function toggleLoginDropdown() {
  const dropdown = document.getElementById("loginDropdown");
  dropdown.classList.toggle("hidden");
}

// loght dark mode.
function toggleMode() {
  const body = document.body;
  const modeButton = document.getElementById('modeToggle');
  
  body.classList.toggle('dark-mode');
  
  if (body.classList.contains('dark-mode')) {
      modeButton.innerHTML = "☀️"; // Light Mode icon
  } else {
      modeButton.innerHTML = "🌙"; // Dark Mode icon
  }
}

