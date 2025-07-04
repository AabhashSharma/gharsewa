<nav class="flex bg-white shadow-md px-6 py-2 justify-between items-center sticky top-0 z-50">
    <a href="/  "  class="flex items-center ">
      <img src="{{ asset('images/Gharsewaicon.jpg') }}" alt="GharSewa Logo" class="w-25 h-20 rounded-full" />
      <span class="text-3xl font-extrabold text-gray-700 tracking-wide">GharSewa</span>
    </a>
    <div class="flex space-x-12 text-lg font-medium text-gray-700">
      <a href="/Home" class="hover:text-gray-500 transition-colors duration-300">Home</a>
      <a href="/Aboutus" class="hover:text-gray-500 transition-colors duration-300">About Us</a>
      <a href="/Service" class="hover:text-gray-500 transition-colors duration-300">Services</a>
      <a href="/Contactus" class="hover:text-gray-500 transition-colors duration-300">Contact Us</a>
    </div>
    <div class="space-x-4">
      <a href="{{route('login')}}"><button class="bg-white border border-gray-700 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">Login</button></a>
      <a href="{{route('register')}}"><button class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition">Register</button></a>
    </div>
  </nav>
