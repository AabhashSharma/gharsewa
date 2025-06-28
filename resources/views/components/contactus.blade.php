<form id="contact" action="#" method="POST"
  class="scroll-mt-24 max-w-xl mx-auto px-6 sm:px-10 py-10 bg-white rounded-xl shadow-lg mt-20 mb-24">
  
  <p class="text-3xl font-bold text-center py-3">Contact Us </p>

  <div class="space-y-4">
    <div>
      <label for="name" class="block mb-1 font-semibold">Name:</label>
      <input type="text" id="name" name="name" 
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="your name" required>
    </div>

    <div>
      <label for="email" class="block mb-1 font-semibold">Email:</label>
      <input type="email" id="email" name="email" 
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="example@mail.com" required>
    </div>

    <div>
      <label for="contactnumber" class="block mb-1 font-semibold">Contact Number:</label>
      <input type="number" id="contactnumber" name="contactnumber" 
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="contact number" required>
    </div>

    <div>
      <label for="message" class="block mb-1 font-semibold">Message:</label>
      <textarea name="message" id="message"
        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="Your message..."></textarea>
    </div>

    <button type="submit"
      class="w-full bg-gray-700 text-white py-2 rounded hover:bg-gray-800 transition duration-200">
      Submit
    </button>
  </div>
</form>
