<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
  <title>Gharsewa - Care for Your Property</title>

  <style>
   @keyframes fade {
    0%, 16.66% { opacity: 1; }
    33.33%, 100% { opacity: 0; }
  }
   .animate-fade {
    animation: fade 30s infinite;
  }
  .animate-fade.delay-5s { animation-delay: 5s; }
  .animate-fade.delay-10s { animation-delay: 10s; }
  .animate-fade.delay-15s { animation-delay: 15s; }
  .animate-fade.delay-20s { animation-delay: 20s; }
  .animate-fade.delay-25s { animation-delay: 25s; }


  </style>

</head>
<body class="bg-gray-50 font-sans text-gray-700">

  <!-- Navbar -->
   <x-navbar />


  <!-- Hero Section -->
  <!-- <section class="relative">
  <img
    src="{{ asset('images/Gharsewaicon.jpg') }}"
    alt="Hero Image"
    class="w-full h-150  object-cover filter brightness-90"
  />
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
    <a
      href="#"
      class="bg-gray-700 text-white px-6 py-2 rounded-full text-base font-medium shadow hover:bg-gray-800 transition">
      Register Property
    </a>
  </div>
</section> -->

<!-- <div class="w-full max-w-sm mx-auto text-center">
  <img
    src="{{ asset('images/Gharsewaicon.jpg') }}"
    alt="Gharsewa Logo"
    class="w-full h-full object-contain mx-auto mb-4"/>

  <a href="#"
    class="bg-gray-700 text-white px-6 py-2 rounded-full text-base font-medium shadow hover:bg-gray-800 transition">
    Register Property
  </a>
</div> -->


<div class="relative w-full min-h-[85vh] overflow-hidden">
  <img src="{{ asset('images/1.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-100 animate-fade" />
  <img src="{{ asset('images/2.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-0 animate-fade delay-5s" />
  <img src="{{ asset('images/3.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-0 animate-fade delay-10s" />
  <img src="{{ asset('images/4.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-0 animate-fade delay-15s" />
  <img src="{{ asset('images/5.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-0 animate-fade delay-20s" />
  <img src="{{ asset('images/6.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-0 animate-fade delay-25s" />

  <!-- Button -->
  <div class="absolute bottom-6 left-6">
    <a href="/" class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded shadow-lg transition duration-300">
      Register Property
    </a>
  </div>
</div>




  <x-aboutus />

  <x-service />

  <x-footer />

</body>
</html>
