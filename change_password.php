<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CCSJDM - Change password </title>
        <!-- icon link -->
        <link rel="shortcut icon" href="assets/CCSJDM_LOGO.png" type="image/x-icon">
    
        <!-- custom css link -->
        <link rel="stylesheet" href="css/main.css">
    
        <!-- tailwind css cdn links -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">

        <style>
            * {margin: 0; padding: 0;}
            body {  
                    background:url('assets/ccsjdm-bg.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
        </style>
    
    </head>  
    <body>
         <section class="relative bg-cover bg-bottom bg-fixed" style="background-image: url('assets/ccsjdm-bg.jpg');">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen"> <!-- Change line here -->
                <div class="w-full bg-white rounded-lg shadow dark:border mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <!-- ccsjdm logo -->
                        <img src="assets/CCSJDM_LOGO.png" alt="CCSJDM-Logo" class="h-20 w-20 mb-4 mx-auto">
                        <h1 class="text-xl font-bold text-center">Faculty Evaluation System</h1>
                        <!-- title starts -->
                        <h1 class="text-2xl text-center font-medium leading-tight tracking tight text-gray-900 md:text-xl dark:text-white">Change Password</h1>
                        <!-- title ends -->
        
                        <!-- main form starts -->
                        <form action="#" class="space-y-4 md:space-y-6">
        
                            <!-- username input field, the user should use his/her student number as the default username -->
                            
                    

                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password:</label>
                                <input name="username" id="username" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-400 focus:border-rose-400 block w-full p-2.5 dark:bg-rose-700 dark:border-rose-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-400 dark:focus:border-rose-300 outline-none" placeholder="Enter your New Password" title="Username" required>
                            </div>

                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password:</label>
                                <input name="username" id="username" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-rose-400 focus:border-rose-400 block w-full p-2.5 dark:bg-rose-700 dark:border-rose-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-400 dark:focus:border-rose-300 outline-none" placeholder="Re-enter your New Password" title="Username" required>
                            </div>

                            <!-- password input field, user/student should used their student number for default password and change it afterwards -->
                                    
                            
                            <!-- submit button -->
                            <button type="submit" class="w-full text-white bg-gradient-to-r from-rose-500 to-rose-400 text-sm font-medium rounded-lg py-2 px-4 shadow-md hover:from-rose-600 hover:to-rose-500">Confirm</button>
                              
                              
                        </form>
                        <!-- main form ends -->
                    </div>
                </div>
            </div>
        </section>
</html>
