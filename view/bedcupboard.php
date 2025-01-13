<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoNest - Home Appliances</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
  <style>
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f4f4f4;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      min-width: 220px;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown-content a {
      color: #333;
      background-color: white;
      padding: 0.5rem 1rem;
      text-decoration: none;
      display: block;
      border-radius: 4px;
    }
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    .category {
      margin-bottom: 10px;
    }
    .subcategory {
      display: none;
      padding-left: 1rem;
    }
    .category:hover .subcategory {
      display: block;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Navigation Bar -->
  <header class="bg-green-700 shadow">
    <div class="container mx-auto flex justify-between items-center py-2 px-4 text-white">
      <!-- Logo Section - Move it to the left -->
      <a href="/" class="flex items-center space-x-6">
        <img src="../images/logo1.png" alt="EcoNest Logo" class="h-24 w-auto">
      </a>

      <!-- Main Categories Dropdown -->
      <div class="dropdown relative ml-8"> <!-- ml-8 added to create space between logo and dropdown -->
        <button class="text-white px-4 py-2 flex items-center space-x-2">
          <span>Products</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="dropdown-content">
          <!-- Kitchen Category -->
          <div class="category">
            <a href="#kitchen" class="font-semibold flex items-center space-x-2">
              <img src="https://img.icons8.com/ios-filled/50/000000/kitchen.png" class="h-5 w-5" alt="Kitchen Icon">
              <span>Kitchen Appliances</span>
            </a>
            <div class="subcategory">
              <a href="../view/blender.php">Blenders & Mixers</a>
              <a href="../view/ricecooker.php">Rice Cookers</a>
              <a href="../view/gascooker.php">Gas Cookers</a>
              <a href="../view/oven.php">Microwaves & Ovens</a>
              <a href="../view/kettles.php">Electric Kettles</a>
            </div>
          </div>

          <!-- Dining Room Category -->
          <div class="category">
            <a href="#dining-room" class="font-semibold flex items-center space-x-2">
              <img src="https://img.icons8.com/ios-filled/50/000000/dining-room.png" class="h-5 w-5" alt="Dining Room Icon">
              <span>Dining Room</span>
            </a>
            <div class="subcategory">
              <a href="../view/diningtable.php">Dining Tables</a>
              <a href="../view/pantrycupboard.php">Pantry Cupboards</a>
            </div>
          </div>

          <!-- Bath Wares Category -->
          <div class="category">
            <a href="#bath-wares" class="font-semibold flex items-center space-x-2">
              <img src="https://img.icons8.com/ios-filled/50/000000/bath.png" class="h-5 w-5" alt="Bath Icon">
              <span>Bath Wares</span>
            </a>
            <div class="subcategory">
              <a href="../view/washingmachine.php">Washing Machines</a>
              <a href="../view/hotwater.php">Hot Water Shower</a>
            </div>
          </div>

          <!-- Bedroom Category -->
          <div class="category">
            <a href="#bedroom" class="font-semibold flex items-center space-x-2">
              <img src="https://img.icons8.com/ios-filled/50/000000/bed.png" class="h-5 w-5" alt="Bedroom Icon">
              <span>Bed Room</span>
            </a>
            <div class="subcategory">
              <a href="../view/bed.php">Beds</a>
              <a href="../view/bedcupboard.php">Bed Cupboards</a>
              <a href="../view/dressingtable.php">Dressing Tables</a>
            </div>
          </div>

          <!-- Living Room Category -->
          <div class="category">
            <a href="#living-room" class="font-semibold flex items-center space-x-2">
              <img src="https://img.icons8.com/ios-filled/50/000000/living-room.png" class="h-5 w-5" alt="Living Room Icon">
              <span>Home Appliances </span>
            </a>
            <div class="subcategory">
              <a href="../view/sofa.php">Sofa  Sets</a>
              <a href="../view/tv.php">Televisions</a>
              <a href="../view/sidetable.php">Side Tables</a>
              <a href="../view/fan.php">Fans</a>
              <a href="../view/iron.php">Dry Irons & Stream Irons</a>
              <a href="../view/refrigerator.php">Refrigerators</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation Links -->
      <nav class="space-x-4 flex items-center">
        <a href="../index.php" class="hover:text-yellow-300">Home</a>
        <a href="../view/about.php" class="hover:text-yellow-300">About Us</a>
        <a href="../view/brands.php" class="hover:text-yellow-300">Brands</a>
        <a href="../view/services.php" class="hover:text-yellow-300">Services</a>
        <a href="../view/contactus.php" class="hover:text-yellow-300">Contact Us</a>
      </nav>
      <div class="flex items-center space-x-4 ml-auto">
  <!-- Search Bar -->
  <div class="relative">
    <input
      type="text"
      placeholder="Search for products"
      class="px-4 py-2 rounded-lg text-gray-700 w-64 bg-white focus:outline-none"
    />
    <span class="absolute top-2.5 right-3 text-gray-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5a7 7 0 110 14 7 7 0 010-14zm10 10l-4-4" />
      </svg>
    </span>
  </div>

  <!-- Cart Icon with Redirection -->
  <a href="../ECONEST/view/cart.php" class="relative flex items-center space-x-1">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.879 6.621A4 4 0 0010 14h7a4 4 0 003.935-3.131L21 7H6" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M16 19a2 2 0 110-4 2 2 0 010 4zm-8 0a2 2 0 110-4 2 2 0 010 4z" />
    </svg>
    <span class="text-sm bg-yellow-500 text-green-700 font-bold rounded-full px-2">0</span>
    <span class="text-white">Cart</span>
  </a>

  <!-- Login Button -->
  <a href="../view/login.php" class="flex items-center bg-yellow-500 px-4 py-2 rounded-lg hover:bg-yellow-400">
    <img src="https://buyabans.com/themes/buyabans/assets/images/latest-icon/account-icon.png" alt="Profile Icon" class="h-5 w-5 mr-2">
    <span>Login</span>
  </a>

  <!-- Sign Up Button -->
  <a href="../view/signup.php" class="bg-white text-green-700 px-4 py-2 rounded-lg hover:bg-gray-100">Sign Up</a>
 </div>
  </header>

  <body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Bed Cupboard</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/bedside-cupboard-1-450x370.jpg" alt="bed 1" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Nico Bedside Cupboard<p>
                    <p class="text-xl text-red-600 mt-2">Rs. 19,565</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Repeat Product Card for 12 items -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/08/filica-548x450.jpg" alt="bed 2" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Felicia Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 13,570</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/KCO02-img-548x450-1.jpg" alt="bed 3" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Ornate Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 13,845</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2019/11/KCAK01-548x450.jpg" alt="bed 4" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Akira Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 15,455</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2021/12/1C7A0417-548x450.jpg" alt="bed 5" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Avelon Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs. 21,975</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2021/12/1C7A05246-548x450.jpg" alt="bed 6" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Allyson Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs.22,280</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
               
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2024/08/Bed-Side-Cupboard-Web.jpg" alt="bed 7" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Lora Bedside Rack</p>
                    <p class="text-xl text-red-600 mt-2">Rs.7,500</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
              <!-- Add more products as required -->
              <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/bedsiderack-1-1.jpg" alt="bed 8" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Regent Bedside Rack</p>
                    <p class="text-xl text-red-600 mt-2">Rs.5,435</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/queenston-suite-bedside-cupboard-548x450.jpg" alt="bed 9" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                <p class="text-lg font-semibold">Queenston Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs.11,620</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
            <!-- Add more products as required -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/Emerson-Bedroom-Suite.jpg" alt="bed 10" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Emerson Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs.57,115</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2020/02/carvinbedside.jpg" alt="bed 11" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">Carvin Bedside Cupboard </p>
                    <p class="text-xl text-red-600 mt-2">Rs.28,225</p>
                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Add to Cart</button>
                        <button class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-300">Wishlist</button>
                    </div>
                </div>
            </div>
             <!-- Add more products as required -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <div class="w-full h-45">
                    <img src="https://damro.lk/wp-content/uploads/2021/12/1C7A0558-548x450.jpg" alt="bed 12" class="w-100 h-100 object-cover">
                </div>
                <div class="p-4">
                    <p class="text-lg font-semibold">California Bedside Cupboard</p>
                    <p class="text-xl text-red-600 mt-2">Rs.21,680</p>
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
      <div class="flex justify-center items-center pt-4">
        <img src="../images/logo1.png" alt="EcoNest Logo" class="h-20 mr-2">
        <h3 class="text-xl font-bold mb-5">Find Us Here</h3>
      </div>
      <p class="mb-4 text-sm text-center">
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
<!-- Menu and Contact Us Section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left">
    
  <!-- Menu Section -->
  <div class="pt-8 ml-4">
    <h3 class="text-xl font-bold mb-8">Menu</h3>
    <ul class="flex flex-col items-start space-y-4 text-sm">
      <li>
        <a href="../index.php" class="hover:text-gray-300 flex items-center">
          Home
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M5 12l5 5L20 7"></path>
          </svg>
        </a>
      </li>
      <li>
        <a href="../view/about.php" class="hover:text-gray-300 flex items-center">
          AboutUs
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M5 12l5 5L20 7"></path>
          </svg>
        </a>
      </li>
      <li>
        <a href="../view/brands.php" class="hover:text-gray-300 flex items-center">
          Brand
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M5 12l5 5L20 7"></path>
          </svg>
        </a>
      </li>
      <li>
        <a href="../view/services.php" class="hover:text-gray-300 flex items-center">
          Services
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M5 12l5 5L20 7"></path>
          </svg>
        </a>
      </li>
      <li>
        <a href="../view/contactus.php" class="hover:text-gray-300 flex items-center">
          ContactUs
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M5 12l5 5L20 7"></path>
          </svg>
        </a>
      </li>
    </ul>
  </div>

  <!-- Contact Us Section -->
  <div class="pt-8 md:pt-8 md:flex md:flex-col items-center md:col-span-2">
    <h3 class="text-xl font-bold mb-6 text-center">Contact</h3>
    <p>Email:<a href="mailto:support@econest.com" class="hover:underline">support@econest.com</a></p>
    <p>Phone:+9411456789</p>
    <p>Hours:Mon-Fri,9AM-6PM</p>
  </div>
</div>

    <!-- Location Section -->
    <div class="pt-8 md:pt-8 md:flex md:flex-col items-center md:col-span-1">
      <h3 class="text-xl font-bold mb-6 text-center">Location</h3>
      <div class="text-center">
        <p>EcoNest Headquarters</p>
        <p>123 Green Lane</p>
        <p>Maharagama, Sri Lanka</p>
      </div>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.749518275126!2d79.922264!3d6.8450901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2501c745e2503%3A0xffcf37db8bbf44e7!2sMaharagama!5e0!3m2!1sen!2slk!4v1699891515155!5m2!1sen!2slk" 
        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <!-- Separator -->
  <hr class="my-2 border-green-900" />

  <!-- Second Footer -->
  <div class="bg-green-700 text-white py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
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
