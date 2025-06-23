<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="{{ asset('images/Gharsewa.jpg') }}" type="image/jpeg" />
    <title>Register</title>
</head>
<body>
<form action="#" method="POST" class="   max-w-md mx-auto p-6 bg-white rounded shadow-md ">
    <p class="text-3xl font-bold text-center py-3">Register Form </p>
  <div class="space-y-4">

    <div>
      <label for="fname" class="block mb-1 font-semibold">Full Name:</label>
      <input type="text" id="fname" name="fname" 
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
             placeholder="Your full name" required>
    </div>

    <div>
      <label for="phonenumber" class="block mb-1 font-semibold">Phone Number:</label>
      <input type="number" id="phonenumber" name="phonenumber" 
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
             placeholder="+977 98XXXXXXXX" required>
    </div>

    <div>
      <label for="email" class="block mb-1 font-semibold">Email:</label>
      <input type="email" id="email" name="email" 
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
             placeholder="example@mail.com" required>
    </div>

    <div>
      <label for="password" class="block mb-1 font-semibold">Password:</label>
      <input type="password" id="password" name="password" 
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
             placeholder="Your password" required>
    </div>
    
    <button type="submit" 
            class="w-full bg-gray-700 text-white py-2 rounded hover:bg-gray-800 transition duration-200">
      Register
    </button>
    <p class="text-center text-sm mt-4">
         Already have an account?
    <a href="{{ route('login') }}" class="text-gray-700 hover:underline">Login here</a>
    </p>

  </div>
</form>

</body>
</html>