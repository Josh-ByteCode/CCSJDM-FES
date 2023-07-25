<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCSJDM - FES</title>

    <!-- ccsjdm icon logo -->
    <link rel="shortcut icon" href="assets/ccsjdm-favicon.png" type="image/x-icon">

    <!-- tailwind css cdn link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- tailwindcss link for dist -->
    <link rel="stylesheet" href="/dist/output.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="bg-red-200">

    <nav class="bg-gray-700 drop-shadow-lg">

        <div class="mx-auto max-w-7xl px-2 drop-shadow-xl sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-12 w-auto" src="assets/ccsjdm-favicon.png" alt="CCSJDM-Logo" href="evaluation-page.html">
                <span class="text-xs font-semibold ml-2 text-white">CCSJDM - FACULTY EVALUATION</span>
              </div>
              <div class="hidden sm:ml-6 sm:block">
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" title="STUDENT NAME" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
      
                <!--
                  Dropdown menu, show/hide based on menu state.
      
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Student Name</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </nav>
    <!-- contents starts here! -->
    <!-- card for the evaluation -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-center items-center mt-4">
        <div class="max-w-3xl w-auto p-8 bg-white border border-gray-200 rounded-lg drop-shadow-xl dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome to the CCSJDM - Faculty Evaluation System!</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Before you begin evaluating your teachers, please keep the following in mind:
            Be Honest and Constructive: Provide genuine feedback that helps us improve the learning experience. Focus on teaching, communication, support, and other relevant aspects.
            Data Collection by Administrators: Please note that administrators will collect and analyze the evaluation data to support faculty development and enhance academic programs. The data collected may include your name (for identification purposes), comments, suggestions, and ratings.
            Show Professionalism and Respect: Express your opinions respectfully, without personal attacks or inappropriate language.
            Use the System Responsibly: Uphold the system's integrity and avoid fraudulent activities. 
            <br>Submit on Time: Complete your evaluations within the specified deadline.

            Thank you for your valuable input and contribution to our academic community!
          </p>
          <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="inline-flex items-center mt-2 px-3 py-2 text-sm font-medium text-center text-white bg-[#FF6B6B] rounded-lg hover:bg-[#FF8989] focus:ring-4 focus:outline-none focus:ring-[#FFB8B8] dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Start Evaluation
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden flex items-center justify-center w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
        <div class="fixed top-0 left-0 w-full h-full bg-gray-900 opacity-60 md:hidden"></div>

          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <!-- Modal header starting-->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                Faculty Performance Evaluation
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-[#FF8989] hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal header ending -->
          
            <!-- Modal body -->
            <div class="p-6">

              <!-- This part is for the profile of the professor to evaluate, feel free to modify this and integrate the user profile to this part -->
              <div class="flex items-center mb-3">
                <img class="w-24 h-20 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile Picture">
                <ul class="list-none">
                  <li>
                    <h4 class="ml-4 text-lg font-medium text-gray-900 dark:text-white">Professor Name:</h4>
                  </li>

                  <li>
                    <h4 class="ml-4 text-lg font-medium text-gray-900 dark:text-white">Professor Subject:</h4>
                  </li>
                </ul>
              </div>
              <!-- profile ends here -->

              <!-- Part 1 Learning Process -->
              <div id="step-1" class="space-y-6">
                <h2 class="flex justify-center text-xl font-semibold">LEARNING PROCESS</h2>
                <ul class="flex justify-center text-xs font-normal">
                  <li>Not Observable = 0</li>
                  <li></li>
                </ul>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="overflow-x-auto">
                    <table class="table-auto w-full table-responsive">
                      <thead>
                        <tr class="bg-[#FCAEAE]">
                          <th class="border border-gray-500 px-4 py-2 text-xs whitespace-normal w-2/3">Questions</th>
                          <th class="border border-b-gray-500 border-t-gray-500 px-4 py-2 text-xs">(0)</th>
                          <th class="border border-b-gray-500 border-t-gray-500 px-4 py-2 text-xs">(1)</th>
                          <th class="border border-b-gray-500 border-t-gray-500 px-4 py-2 text-xs">(2)</th>
                          <th class="border border-b-gray-500 border-t-gray-500 px-4 py-2 text-xs">(3)</th>
                          <th class="border border-b-gray-500 border-t-gray-500 px-4 py-2 text-xs">(4)</th>
                          <th class="border border-gray-500 px-4 py-2 text-xs">(5)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="border text-base border-gray-500 px-4 py-2">1. The learners are engaged to think deeply with and about the important concepts and theories.</td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id="" class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id="" class="h-4 w-4" ></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-r-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                        </tr>
                        <tr>
                          <td class="border border-gray-500 px-4 py-2 whitespace-normal w-2/3">2. The learners have opportunities to create and generate new ideas.</td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-r-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                        </tr>
                        <tr>
                          <td class="border border-gray-500 px-4 py-2">3. The learners are engaged in pair and group activities.</td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-r-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                        </tr>
                        <tr>
                          <td class="border border-gray-500 px-4 py-2">4. Maintains eye contact with the students while speaking.</td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-r-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                        </tr>
                        <tr>
                          <td class="border border-gray-500 px-4 py-2">5. The Learners are provided opportunities to communicate accurately, appropriately, and meaningfully.</td>
                          <td class="border border-b-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-b-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-b-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-b-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-b-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                          <td class="border border-b-gray-500 border-r-gray-500 px-4 py-2 text-center"><input type="checkbox" name="" id=""  class="h-4 w-4"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <button type="button" class="text-white bg-neutral-400 hover:bg-neutral-500 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" data-modal-hide="defaultModal">Cancel
                </button>

                <button type="button" class="bg-[#FF6B6B] hover:bg-[#FF8989] focus:ring-4 focus:outline-none focus:ring-[#FFB8B8] text-white rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep()">Next</button>
              </div>
              <!-- end of part 1 -->


              <!-- comments and suggestions -->
              <div id="step-2" class="hidden space-y-6">
                <h2 class="flex justify-center text-xl font-semibold">COMMENTS</h2>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
              
                <button type="button" class="text-white bg-neutral-400 hover:bg-neutral-500 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" onclick="previousStep()">Previous
                </button>
              
                <button type="button" class="bg-[#FF6B6B] hover:bg-[#FF8989] focus:ring-4 focus:outline-none focus:ring-[#FFB8B8] text-white rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep()">Submit</button>
              </div>
              <!-- end of comments and suggestions -->
            </div>
          </div>        
      </div>
    </div>
    <!-- modal end -->    
    <!-- contents ends here! -->

    <!-- THIS IS THE SCRIPT FOR THE USER MENU-->
    <script>
         // Get the user menu button and the user menu itself
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');

        //HIDE THE USER MENU BY DEFAULT
        userMenu.classList.add('hidden');
    
        // Add event listener to the user menu button
        userMenuButton.addEventListener('click', function() {
            // Toggle the "hidden" class to show/hide the user menu
            userMenu.classList.toggle('hidden');
        });
          // Get the modal and the buttons to show/hide the modal
        const modal = document.getElementById('defaultModal');
        const modalButtons = document.querySelectorAll('[data-modal-toggle="defaultModal"]');
        const modalCloseButtons = document.querySelectorAll('[data-modal-hide="defaultModal"]');

        // Show the modal
        modalButtons.forEach((button) => {
          button.addEventListener('click', () => {
            modal.classList.add('block');
            modal.classList.remove('hidden');
          });
        });

        // Hide the modal
        modalCloseButtons.forEach((button) => {
          button.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('block');
          });
        });
        let currentStep = 1;
          
          function nextStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep++;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');
          }
        
          function previousStep() {
            document.getElementById(`step-${currentStep}`).classList.add('hidden');
            currentStep--;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');
          }
    </script>

</body>
</html>