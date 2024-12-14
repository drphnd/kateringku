<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/custom.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  
</head>
<body class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-beige-50 shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-2">Get Started</h2>
    <p class="text-center text-gray-600 mb-6">
      Already have an Account? <a href="" class="text-brown-600 font-medium hover:underline">Log in</a>
    </p>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-gray-700 mb-2">Username</label>
        <input
          type="text"
          id="username"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your username"
        />
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-700 mb-2">Password</label>
        <input
          type="password"
          id="password"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your password"
        />
      </div>
      <div class="mb-4">
        <label for="name" class="block text-gray-700 mb-2">Name</label>
        <input
          type="text"
          id="name"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your name"
        />
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-2">Email</label>
        <input
          type="email"
          id="email"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your email"
        />
      </div>
      <div class="mb-6">
        <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
        <div class="flex">
          <span class="flex items-center bg-gray-100 border border-gray-300 rounded-l-md px-3 text-gray-700">+62</span>
          <input
            type="tel"
            id="phone"
            class="w-full border border-gray-300 rounded-r-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
            placeholder="Enter your phone number"
          />
        </div>
      </div>
      <button
        type="submit"
        class="w-full bg-brown-600 text-white py-2 rounded-md hover:bg-brown-700 focus:outline-none focus:ring-2 focus:ring-brown-400 focus:ring-offset-2"
      >
        Sign Up
      </button>
    </form>
  </div>
</body>
</html>
