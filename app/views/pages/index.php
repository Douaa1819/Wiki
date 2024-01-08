<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Wiki</title>
</head>



<body class="min-h-screen">

    <div id="navbar">
        <div class="flex justify-start">
            <img src="../public/image/logo.png" alt="logo" width="150px" height="100px">
        </div>
        <div id="search-container">
            <img src="../public/image/icons.png" alt="search" width="30px">
            <input type="text" id="search-input" placeholder="Search for anything">
            <div id="search-icon">
                <i class="fas fa-search text-gray-00"></i>
            </div>
        </div>
        <div>
            <a href="#">Sign Up</a>
            <button class="cursor-pointer transition-all bg-gray-300 text-white px-6 py-2 rounded-lg
                      border-gray-600
               border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] mr-4 hover:border-b-[6px]
               active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                Sign In
            </button>
        </div>
        <div>
            <img src="../public/image/menu.png" alt="burger_menu" id="iconMenu" class="text-2xl text-black mr-3 cursor-pointer">
            <div id="burgerMenu" class="hidden bg-white border justify-end w-screen fixed top-0 right-0 p-4">
                <i onclick="toggleMenu()" class="fas fa-times absolute top-5 right-7 text-2xl cursor-pointer"></i>
                <nav class="flex flex-col gap-6 text-center items-center">
                    <div class="flex flex-col gap-2 w-full">
                        <a href="index.php" class="text-xl w-full hover:bg-gray-300 hover:text-white">Home</a>
                        <a href="#" class="text-xl w-full hover:bg-gray-300 hover:text-white">Account</a>
                        <a href="#" class="text-xl w-full hover:bg-gray-300 hover:text-white">Contact Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div id="main-content">
        <img src="../public/image/wikiii.png" alt="">
    </div>
<script src="../public/js/main.js"></script>
</body>

</html>
