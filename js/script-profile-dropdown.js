        // Get references to the button and dropdown elements
        const profileButton = document.querySelector('.profile-button');
        const profileDropdown = document.getElementById('profileDropdown');
      
        // Function to toggle the visibility of the profile dropdown
        function toggleProfileDropdown() {
          profileDropdown.classList.toggle('hidden');
        }
      
        // Function to hide the profile dropdown when clicking outside of it
        function hideProfileDropdown(event) {
          if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
            profileDropdown.classList.add('hidden');
          }
        }
      
        // Add event listener to the profile button
        profileButton.addEventListener('click', toggleProfileDropdown);
      

        function toggleDropDown(dropdownId){
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }