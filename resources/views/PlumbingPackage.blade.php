<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plumbing Packages | GharSewa</title>
    <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <x-navbar />

    <div class="max-w-7xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Plumbing Packages</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            GharSewa provides reliable and scheduled plumbing services by verified professionals. Pick a plan that keeps your property's plumbing running smoothly.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Package 1: Basic Fix -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Basic Fix</h2>
                <p class="text-sm text-gray-600 mb-4">Best for small fixes and leak checks</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> One-time visit</p>
                    <p><strong>Price:</strong> Rs. 899</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>Faucet & pipe leak repair</li>
                    <li>Drain unclogging</li>
                    <li>Minor fixture tightening</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">SMS confirmation after service</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 2: Smart Plumbing -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Smart Plumbing</h2>
                <p class="text-sm text-gray-600 mb-4">For households with moderate plumbing issues</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> Two visits</p>
                    <p><strong>Price:</strong> Rs. 1699</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from Basic Fix</li>
                    <li>Water tank inspection</li>
                    <li>Toilet flush repair</li>
                    <li>Pipe alignment check</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Photo upload in dashboard</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 3: Premium Care -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-300 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Premium Care</h2>
                <p class="text-sm text-gray-600 mb-4">For large buildings or critical plumbing maintenance</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 3 Months</p>
                    <p><strong>Frequency:</strong> Monthly (3 visits)</p>
                    <p><strong>Price:</strong> Rs. 4500</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from Smart Plumbing</li>
                    <li>Pressure & flow testing</li>
                    <li>Emergency pipe repairs</li>
                    <li>Descaling for water lines</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Service report & technician rating</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

        </div>
    </div>

    <x-footer />

</body>
</html>
