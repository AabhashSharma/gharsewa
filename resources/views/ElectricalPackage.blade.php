<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electrical Packages | GharSewa</title>
    <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <x-navbar />

    <div class="max-w-7xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Electrical Packages</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            GharSewa offers safe and efficient electrical services by verified technicians. Book a package to ensure your home or property stays powered and protected.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Package 1: Basic Electrical Check -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Basic Electrical Check</h2>
                <p class="text-sm text-gray-600 mb-4">Great for small repairs and safety inspections</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> One-time visit</p>
                    <p><strong>Price:</strong> Rs. 999</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>Socket & switch testing</li>
                    <li>Mini fuse replacement</li>
                    <li>Basic wiring inspection</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">SMS alert after inspection</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 2: Smart Electrical -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Smart Electrical</h2>
                <p class="text-sm text-gray-600 mb-4">Ideal for family homes and remote supervision</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> Two visits</p>
                    <p><strong>Price:</strong> Rs. 1899</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from Basic Electrical Check</li>
                    <li>Main panel inspection</li>
                    <li>Short-circuit prevention</li>
                    <li>Appliance safety testing</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Progress images in dashboard</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 3: Premium Electrical Safety -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-300 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Premium Electrical Safety</h2>
                <p class="text-sm text-gray-600 mb-4">Best for large homes, buildings or commercial setups</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 3 Months</p>
                    <p><strong>Frequency:</strong> Monthly (3 visits)</p>
                    <p><strong>Price:</strong> Rs. 5200</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from Smart Electrical</li>
                    <li>Wiring load balancing</li>
                    <li>Voltage fluctuation protection</li>
                    <li>Emergency fault repair</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Detailed report with technician rating</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

        </div>
    </div>

    <x-footer />

</body>
</html>
