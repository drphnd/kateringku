<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/custom.js', 'public/mydesign/mystyle.css'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-yellow-900 shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-semibold text-center text-white mb-2">Welcome Back</h2>
    <p class="text-center text-slate-400 mb-6">
      Don’t have an Account? <a href="#" class="text-brown-600 font-medium hover:underline">Sign Up</a>
    </p>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-white mb-2">Username</label>
        <input
          type="text"
          id="username"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your username"
        />
      </div>
      <div class="mb-6">
        <label for="password" class="block text-white mb-2">Password</label>
        <input
          type="password"
          id="password"
          class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-brown-400"
          placeholder="Enter your password"
        />
      </div>
      <div class="flex items-center justify-between mb-6">
        <label class="flex items-center text-gray-700">
          <input type="checkbox" class="mr-2 focus:ring-brown-400">
          Remember Me
        </label>
      </div>
      <div class="bg-orange-100 py-2 rounded-md hover:bg-orange-200 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
        <button
        type="submit"
        class="w-full bg-brown-600 text-stone-500 py-2 rounded-md hover:bg-brown-700 focus:outline-none focus:ring-2 focus:ring-brown-400 focus:ring-offset-2"
      >
        Log In
      </button>
      </div>
      
    </form>
  </div>
</body>
</html>
