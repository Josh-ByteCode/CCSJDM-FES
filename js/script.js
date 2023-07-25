const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
const eyeIcon = document.getElementById('eyeIcon');
const eyePath = document.getElementById('eyePath');
const slashPath = document.getElementById('slashPath');

togglePassword.addEventListener('click', () => {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyePath.style.display = 'none';
    slashPath.style.display = 'block';
  } else {
    passwordInput.type = 'password';
    eyePath.style.display = 'block';
    slashPath.style.display = 'none';
  }
});

const sidebarToggle = document.getElementById('sidebar-toggle');
const sidebar = document.getElementById('sidebar');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('visible');
    sidebarToggle.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    const targetElement = event.target;
    if (!targetElement.closest('#sidebar') && !targetElement.closest('#sidebar-toggle')) {
        sidebar.classList.remove('visible');
        sidebarToggle.classList.remove('hidden');
    }
});

