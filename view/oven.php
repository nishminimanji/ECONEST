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
  <body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Ovens</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2021/06/MS28H5013ASEU-WEB-3.jpg" alt="Blender 1" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Samsung Microwave Oven – 28L</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 74,800</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Repeat Product Card for 12 items -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2024/12/IEOV0746-01.jpg" alt="Blender 2" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Innovex Electric Oven – 46L</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 39,840</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2021/07/MS23K3513AK.jpg" alt="Blender 3" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Samsung Solo Microwave Oven – 23L</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 44,590</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2021/06/NN-CT645-1.jpg" alt="Blender 4" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Panasonic Convection Microwave Oven – 27L</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 72,350</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2021/09/IEOV05-32-1.jpg" alt="Blender 5" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Innovex Electric Oven – 32L</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 30,200</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://damroonline.lk/wp-content/uploads/2021/06/NNGT342M-WEB-1.jpg" alt="Blender 6" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Panasonic Grill Microwave Oven – 23L</p>
                    <p class="text-xl text-red-600 mt-2">Rs.57,510</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
               
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://thehousingforum.com/wp-content/uploads/2019/01/how-to-use-a-convection-oven.jpg" alt="Blender 7" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">MISTRAL 23L Electric Oven - Black</p>
                    <p class="text-xl text-red-600 mt-2">Rs.29,990</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
              <!-- Add more products as required -->
              <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-48">
                    <img src="https://th.bing.com/th/id/OIP.uuK2wL2A0MD3TDTujqEWcQHaF7?w=500&h=400&rs=1&pid=ImgDetMain" alt="Blender 8" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Hamilton Beach Toaster Oven</p>
                    <p class="text-xl text-red-600 mt-2">Rs.32,270</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>      
        </div>
    </div>



    <footer class="bg-green-900 text-white py-0">
  <div class="container mx-auto text-center grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Find Us Here Section -->
    <div>
      <div class="flex justify-center items-center mb-0">
        <img src="logo1.png" alt="EcoNest Logo" class="h-20 mr-2">
        <h3 class="text-xl font-bold mb-5">Find Us Here</h3>
      </div>
      <p class="mb-4 text-sm">
        If you have any questions about our services or would like to learn more about our products, feel free to reach out to us. We're here to help and provide you with the best home appliance solutions. Don’t hesitate to contact us – we’re just a click away!
      </p>
      <ul class="flex justify-center space-x-6 mb-4">
        <li>
          <a href="https://twitter.com" target="_blank" class="hover:text-gray-300">
            <!-- Twitter Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557a9.936 9.936 0 01-2.828.775A4.932 4.932 0 0023.337 3a9.865 9.865 0 01-3.127 1.195 4.925 4.925 0 00-8.389 4.482 13.978 13.978 0 01-10.141-5.146 4.927 4.927 0 001.523 6.573A4.902 4.902 0 01.964 8.86v.061a4.926 4.926 0 003.946 4.83 4.93 4.93 0 01-2.224.084 4.927 4.927 0 004.604 3.417A9.868 9.868 0 010 19.54a13.94 13.94 0 007.548 2.213c9.055 0 14-7.496 14-13.986 0-.213-.005-.426-.014-.637A9.936 9.936 0 0024 4.557z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://facebook.com" target="_blank" class="hover:text-gray-300">
            <!-- Facebook Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.408.593 24 1.325 24H12.82v-9.294H9.692V11.28h3.128V8.736c0-3.1 1.893-4.788 4.656-4.788 1.325 0 2.464.099 2.794.144v3.24h-1.917c-1.504 0-1.796.714-1.796 1.764v2.312h3.588l-.467 3.427h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://instagram.com" target="_blank" class="hover:text-gray-300">
            <!-- Instagram Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M16.98 1.84a6.14 6.14 0 012.17 0 2.23 2.23 0 011.57 1.57c.13.46.2.96.2 1.48s-.07 1.02-.2 1.48a2.23 2.23 0 01-1.57 1.57c-.46.13-.96.2-1.48.2s-1.02-.07-1.48-.2a2.23 2.23 0 01-1.57-1.57c-.13-.46-.2-.96-.2-1.48s.07-1.02.2-1.48a2.23 2.23 0 011.57-1.57m0-1.84C15.32 0 14.18.42 13.24 1.36 12.3 2.3 11.88 3.44 11.88 4.6s.42 2.3 1.36 3.24C14.18 8.58 15.32 9 16.48 9s2.3-.42 3.24-1.36C20.68 6.9 21.1 5.76 21.1 4.6s-.42-2.3-1.36-3.24C18.78.42 17.64 0 16.48 0z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <!-- Menu Section -->
    <div>
      <h3 class="text-xl font-bold mb-4">Menu</h3>
      <ul class="flex flex-col items-center space-y-4 text-center text-sm">
        <li>
          <a href="#home" class="hover:text-gray-300 flex items-center">
            Home
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path d="M5 12l5 5L20 7"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#about" class="hover:text-gray-300 flex items-center">
            About
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path d="M5 12l5 5L20 7"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#contact" class="hover:text-gray-300 flex items-center">
            Contact
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path d="M5 12l5 5L20 7"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#server" class="hover:text-gray-300 flex items-center">
            Server
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path d="M5 12l5 5L20 7"></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="#brand" class="hover:text-gray-300 flex items-center">
            Brand
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path d="M5 12l5 5L20 7"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <!-- Contact Us and Location Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Contact Us -->
      <div>
        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
        <p>Email: <a href="mailto:support@econest.com" class="hover:underline">support@econest.com</a></p>
        <p>Phone: +94 11-456-789</p>
        <p>Hours: Mon-Fri, 9 AM - 6 PM</p>
      </div>

      <!-- Location -->
    <div>
      <h3 class="text-xl font-bold mb-4">Location</h3>
      <p>EcoNest Headquarters</p>
      <p>123 Green Lane</p>
      <p>Maharagama, Sri Lanka</p>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.749518275126!2d79.922264!3d6.8450901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2501c745e2503%3A0xffcf37db8bbf44e7!2sMaharagama!5e0!3m2!1sen!2slk!4v1699891515155!5m2!1sen!2slk" 
        width="110%" height="110" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
  </div>


  
  <!-- Separator -->
<hr class="my-2 border-green-900" />

<!-- Second Footer -->
<div class="bg-green-700 text-white py-6">
<div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Terms & Conditions, Privacy Policy, FAQ -->
    
    <!-- Terms & Conditions, Privacy Policy, FAQ -->
    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-center text-sm">
      <a href="#" class="hover:text-gray-300">Terms & Conditions</a>
      <a href="#" class="hover:text-gray-300">Privacy Policy</a>
      <a href="#" class="hover:text-gray-300">FAQ</a>
    </div>

    <!-- Payment Methods -->
    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-center mt-4 md:mt-0">
      <img src="https://mysoftlogic.lk/build/images/logos_1.3153c53c.png" alt="Visa" class="h-5">
      <img src="https://mysoftlogic.lk/build/images/logos_2.52283647.png" alt="MasterCard" class="h-5">
      <img src="https://mysoftlogic.lk/build/images/logos_4.301b650b.png" alt="PayPal" class="h-5">
      <img src="https://mysoftlogic.lk/build/images/frimi.257e7857.png" alt="Frimi" class="h-5">
    </div>
  </div>

  <!-- Copyright Section -->
  <div class="text-center mt-6 text-sm">
    © 2024 EcoNest. All rights reserved.
  </div>
</div>
</footer>
  
</body>
</html>

