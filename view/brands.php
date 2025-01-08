<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoNest - About Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
  <style>
    .carousel-inner {
      width: 300%;
      transition: transform 1s ease-in-out;
    }
    .carousel-slide {
      width: 100%;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">


  <!-- Navigation Bar -->
  <header class="bg-green-700 shadow">
    <div class="container mx-auto flex justify-between items-center py-2 px-4 text-white">
      <div class="flex items-center space-x-6">
        <a href="/" class="flex items-center space-x-6">
          <img src="logo1.png" alt="EcoNest Logo" class="h-24 w-auto">
        </a>
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" class="flex items-center space-x-2 text-white bg-green-800 px-4 py-2 rounded-lg hover:bg-green-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>All Categories</span>
          </button>
          <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white text-gray-800 shadow-lg rounded-lg overflow-hidden z-10">
            <a href="#kitchen-appliances" class="block px-4 py-2 hover:bg-gray-100">Kitchen Appliances</a>
            <a href="#bath-wares" class="block px-4 py-2 hover:bg-gray-100">Bath Wares</a>
            <a href="#dining-appliances" class="block px-4 py-2 hover:bg-gray-100">Dining Appliances</a>
            <a href="#living-area" class="block px-4 py-2 hover:bg-gray-100">Living Area</a>
            <a href="#outside" class="block px-4 py-2 hover:bg-gray-100">Outside</a>
          </div>
        </div>
      </div>
      <nav class="space-x-4 flex items-center">
        <a href="index.php" class="hover:text-yellow-300">Home</a>
        <a href="../view/about.php" class="hover:text-yellow-300">About Us</a>
        <a href="../view/brands.php" class="hover:text-yellow-300">Brands</a>
        <a href="../view/services.php" class="hover:text-yellow-300">Services</a>
        <a href="../view/contactus.php" class="hover:text-yellow-300">Contact Us</a>
      </nav>
      <div class="flex items-center space-x-4">
        <div class="relative">
          <input type="text" placeholder="Search for products" class="px-4 py-2 rounded-lg text-gray-700 w-64 bg-white focus:outline-none" />
          <span class="absolute top-2.5 right-3 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11 5a7 7 0 110 14 7 7 0 010-14zm10 10l-4-4" />
            </svg>
          </span>
        </div>
        <div class="relative flex items-center space-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.879 6.621A4 4 0 0010 14h7a4 4 0 003.935-3.131L21 7H6" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 19a2 2 0 110-4 2 2 0 010 4zm-8 0a2 2 0 110-4 2 2 0 010 4z" />
          </svg>
          <span class="text-sm bg-yellow-500 text-green-700 font-bold rounded-full px-2">0</span>
          <span class="text-white">Cart</span>
        </div>
        <a href="#login" class="bg-yellow-500 px-4 py-2 rounded-lg hover:bg-yellow-400">Login</a>
        <a href="#signup" class="bg-white text-green-700 px-4 py-2 rounded-lg hover:bg-gray-100">Sign Up</a>
      </div>
    </div>
  </header>