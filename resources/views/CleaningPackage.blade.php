<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cleaning Packages | GharSewa</title>
    <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <x-navbar />

    <div class="max-w-7xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Cleaning Packages</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            GharSewa offers verified, scheduled cleaning services for your property. Choose a package that fits your home and lifestyle.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Package 1: Light Clean -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Light Clean</h2>
                <p class="text-sm text-gray-600 mb-4">Perfect for small flats and minimal upkeep needs</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> Once per week (4 visits)</p>
                    <p><strong>Price:</strong> Rs. 999</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>Floor & surface cleaning</li>
                    <li>Dusting (corners, furniture)</li>
                    <li>Trash collection</li>
                    <li>Switch & handle wipe</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Basic SMS alert on completion</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 2: Smart Hygiene -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-200 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Smart Hygiene</h2>
                <p class="text-sm text-gray-600 mb-4">Ideal for busy families or owners abroad</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 1 Month</p>
                    <p><strong>Frequency:</strong> Twice per week (8 visits)</p>
                    <p><strong>Price:</strong> Rs. 1899</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>Everything from Light Clean</li>
                    <li>Kitchen deep cleaning</li>
                    <li>Bathroom disinfecting</li>
                    <li>Glass & mirror cleaning</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Photo proof in dashboard</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

            <!-- Package 3: Premium Disinfect -->
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl border border-gray-300 transition">
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Premium Disinfect</h2>
                <p class="text-sm text-gray-600 mb-4">For villas, remote owners, or commercial space</p>

                <div class="text-sm text-gray-700 mb-4">
                    <p><strong>Duration:</strong> 3 Months</p>
                    <p><strong>Frequency:</strong> 3×/week (36 visits)</p>
                    <p><strong>Price:</strong> Rs. 5200</p>
                </div>

                <ul class="list-disc list-inside text-gray-800 space-y-1 mb-6">
                    <li>All from Smart Hygiene</li>
                    <li>Balcony & terrace sweeping</li>
                    <li>Monthly room sanitization</li>
                    <li>Mold-prevention spray</li>
                </ul>

                <p class="text-sm text-gray-500 mb-4">Completion report with image & rating</p>

                <button class="w-full bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-800 transition">
                    Subscribe
                </button>
            </div>

        </div>
    </div>

    <x-footer />

</body>
</html>
