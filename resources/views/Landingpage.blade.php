<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
  <title>Gharsewa - Care for Your Property</title>
  <!-- <style>
    .package-scroll::-webkit-scrollbar {
      height: 6px;
    }
    .package-scroll::-webkit-scrollbar-thumb {
      background-color: #4b5563; 
      border-radius: 10px;
    }
  </style> -->
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

<div class="w-full max-w-sm mx-auto text-center">
  <img
    src="{{ asset('images/Gharsewaicon.jpg') }}"
    alt="Gharsewa Logo"
    class="w-full h-full object-contain mx-auto mb-4"/>

  <a href="#"
    class="bg-gray-700 text-white px-6 py-2 rounded-full text-base font-medium shadow hover:bg-gray-800 transition">
    Register Property
  </a>
</div>

  <!-- Welcome Text -->
  <section class="max-w-5xl mx-auto px-6 py-20 text-center">
    <h2 class="text-5xl font-bold text-gray-700 mb-6 tracking-tight">Welcome to GharSewa</h2>
    <p class="text-xl max-w-4xl mx-auto leading-relaxed">
      Your Trusted Partner in Property Care. GharSewa is Nepal's all-in-one digital platform for smart and reliable property maintenance.
      Whether you live abroad or locally, we help you manage your property with ease, flexibility, and trust. From plumbing and electrical
      repairs to regular cleaning, inspections, and emergency services — we've got you covered.
    </p>
  </section>

  <!-- About Us -->
  <section
    id="about"
    class="flex flex-col lg:flex-row items-center max-w-6xl mx-auto px-6 py-24 gap-16">
    <div class="flex-1 max-w-lg">
      <h2 class="text-4xl font-bold text-gray-700 mb-6 tracking-wide">About Us</h2>
      <p class="text-lg leading-relaxed">
        GharSewa simplifies property maintenance for everyone — especially those managing multiple homes or living abroad.
        Our platform eliminates the hassle of unreliable workers by connecting you with trusted, verified service providers.
        Enjoy on-demand and subscription-based options, a powerful dashboard, service tracking, real-time updates, and more.
        Our mission is to make property care efficient, reliable, and stress-free across Nepal.
      </p>
    </div>
    <img
      src="{{ asset('images/image1.jpg') }}"
      alt="Team"
      class="w-96 h-96 object-cover rounded-3xl shadow-2xl"
      loading="lazy"
    />
  </section>

  <!-- Services -->
  <section id="services" class="bg-gray-100 py-24 px-6">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-5xl font-bold text-center text-gray-700 mb-14 tracking-wide">Our Services</h2>
      <p class="text-center text-lg text-gray-700 mb-20 max-w-3xl mx-auto leading-relaxed">
        GharSewa offers essential home maintenance services including cleaning, plumbing, and electrical repairs—all delivered by trusted, verified professionals.
      </p>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        <!-- Cleaning Service -->
        <div
          class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row gap-10 transition-transform hover:scale-[1.03] duration-300">
          <div class="flex-1">
            <h3 class="text-3xl font-extrabold text-gray-700 mb-6 tracking-wide">
              Cleaning Service
            </h3>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
              Keep your property spotless with professional housekeeping and deep cleaning options.
              Customizable schedules and real-time updates included. Experience the convenience of a clean, welcoming space managed by trusted experts.
            </p>
            <div class="grid grid-cols-3 gap-5">
              <img
                src="{{ asset('images/cleaning1.jpg') }}"
                alt="Cleaning 1"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy" />
              <img
                src="{{ asset('images/cleaning2.jpg') }}"
                alt="Cleaning 2"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
              <img
                src="{{ asset('images/cleaning3.jpg') }}"
                alt="Cleaning 3"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
            </div>
          </div>
          <div
            class="w-full md:w-1/3 flex flex-col justify-center items-center bg-gray-50 rounded-2xl p-6 shadow-inner">
            <h4 class="text-xl font-semibold text-gray-700 mb-5 tracking-wide">View Packages</h4>
            <a
              href="#"
              class="bg-gray-700 text-white px-6 py-3 rounded-lg hover:bg-gray-800 shadow-lg font-semibold transition"
              >See Options</a>
          </div>
        </div>

        <!-- Electrical Service -->
        <div
          class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row gap-10 transition-transform hover:scale-[1.03] duration-300">
          <div class="flex-1">
            <h3 class="text-3xl font-extrabold text-gray-700 mb-6 tracking-wide">
              Electrical Service
            </h3>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
              From routine installations to emergency repairs, we ensure your property stays powered, safe, and compliant with verified electricians.
            </p>
            <div class="grid grid-cols-3 gap-5">
              <img
                src="{{ asset('images/electrical1.jpeg') }}"
                alt="Electrical 1"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
              <img
                src="{{ asset('images/electrical2.jpeg') }}"
                alt="Electrical 2"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy" />
              <img
                src="{{ asset('images/electrical3.jpeg') }}"
                alt="Electrical 3"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
            </div>
          </div>
          <div
            class="w-full md:w-1/3 flex flex-col justify-center items-center bg-gray-50 rounded-2xl p-6 shadow-inner">
            <h4 class="text-xl font-semibold text-gray-700 mb-5 tracking-wide">View Packages</h4>
            <a
              href="#"
              class="bg-gray-700 text-white px-6 py-3 rounded-lg hover:bg-gray-800 shadow-lg font-semibold transition"
              >See Options</a>
          </div>
        </div>

        <!-- Plumbing Service -->
        <div
          class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row gap-10 transition-transform hover:scale-[1.03] duration-300">
          <div class="flex-1">
            <h3 class="text-3xl font-extrabold text-gray-700 mb-6 tracking-wide">
              Plumbing Service
            </h3>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
              Leaky taps or major repairs — our skilled plumbers deliver reliable service on time. Available on-demand or with a care plan.
            </p>
            <div class="grid grid-cols-3 gap-5">
              <img
                src="{{ asset('images/plumbing1.jpeg') }}"
                alt="Plumbing 1"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
              <img
                src="{{ asset('images/plumbing2.jpeg') }}"
                alt="Plumbing 2"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
              <img
                src="{{ asset('images/plumbing3.jpeg') }}"
                alt="Plumbing 3"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
            </div>
          </div>
          <div
            class="w-full md:w-1/3 flex flex-col justify-center items-center bg-gray-50 rounded-2xl p-6 shadow-inner">
            <h4 class="text-xl font-semibold text-gray-700 mb-5 tracking-wide">View Packages</h4>
            <a
              href="#"
              class="bg-gray-700 text-white px-6 py-3 rounded-lg hover:bg-gray-800 shadow-lg font-semibold transition"
              >See Options</a>
          </div>
        </div>

        <!-- Device & Appliance Support -->
        <div
          class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row gap-10 transition-transform hover:scale-[1.03] duration-300">
          <div class="flex-1">
            <h3 class="text-3xl font-extrabold text-gray-700 mb-6 tracking-wide">
              Device &amp; Appliance Support
            </h3>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
              We provide setup, repair, and maintenance for essential devices like printers, tube lights, scanners, projectors, and more. Our skilled technicians ensure your equipment stays efficient and functional at home or in the office.
            </p>
            <div class="grid grid-cols-3 gap-5">
              <img
                src="{{ asset('images/printer.jpg') }}"
                alt="Printer"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
              <img
                src="{{ asset('images/projector.jpeg') }}"
                alt="Projector"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy" />
              <img
                src="{{ asset('images/scanner.jpeg') }}"
                alt="Scanner"
                class="w-full h-36 object-cover rounded-2xl shadow-md"
                loading="lazy"/>
            </div>
          </div>
          <div
            class="w-full md:w-1/3 flex flex-col justify-center items-center bg-gray-50 rounded-2xl p-6 shadow-inner">
            <h4 class="text-xl font-semibold text-gray-700 mb-5 tracking-wide">View Packages</h4>
            <a
              href="#"
              class="bg-gray-700 text-white px-6 py-3 rounded-lg hover:bg-gray-800 shadow-lg font-semibold transition"
              >See Options</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <x-footer />

</body>
</html>
