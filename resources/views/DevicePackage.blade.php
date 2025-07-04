<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Device & Appliance Support Packages | GharSewa</title>
    <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <x-navbar />

    <div class="max-w-7xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Device & Appliance Support Packages</h1>
        
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-4">
            We provide setup, repair, and maintenance for essential devices like printers, tube lights, scanners, projectors, and more.
        </p>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Our skilled technicians ensure your equipment stays efficient and functional at home or in the office.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Package 1: AppFix -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">AppFix</h2>
                <p class="text-sm text-gray-600 mb-4">Basic repairs for small household devices</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> One visit</p>
                    <p><strong>Price:</strong> Rs. 999</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>Tube light replacement & testing</li>
                    <li>Fan & socket fixes</li>
                    <li>Basic printer setup</li>
                    <li>Scanner connectivity check</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">SMS report on completion</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 2: SmartGear -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">SmartGear</h2>
                <p class="text-sm text-gray-600 mb-4">Advanced care for multi-device homes</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> Two visits</p>
                    <p><strong>Price:</strong> Rs. 1799</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from AppFix</li>
                    <li>Projector setup & testing</li>
                    <li>Printer ink system check</li>
                    <li>Tube light fixture cleaning</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Dashboard updates with photo proof</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 3: AppliCare -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-300 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">AppliCare</h2>
                <p class="text-sm text-gray-600 mb-4">Full coverage for tech-heavy households or offices</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 3 Months</p>
                    <p><strong>Frequency:</strong> Monthly (3 visits)</p>
                    <p><strong>Price:</strong> Rs. 4999</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from SmartGear</li>
                    <li>Printer & scanner deep diagnostics</li>
                    <li>Projector lens cleaning</li>
                    <li>Wiring & surge protection audit</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Completion report + expert rating</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

        </div>
    </div>

    <x-footer />

</body>
</html>
