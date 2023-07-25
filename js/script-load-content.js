        // Function to load content from a specific URL using AJAX
        function loadContent(url) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    const mainContent = document.getElementById('main-content');
                    mainContent.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error fetching content:', error);
                });
        }

        // Function to load content from dashboard.html using AJAX
        function loadDashboardContent() {
            const url = 'dashboard.html'; // The URL of the dashboard content
            loadContent(url);
        }

        // Load dashboard content when the page is loaded
        document.addEventListener('DOMContentLoaded', function () {
            loadDashboardContent();
        });

        // Event listener for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const pageURL = this.href;
                loadContent(pageURL);
            });
        });