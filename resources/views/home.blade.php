<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Laravel 12 me Tailwind ko link karne ke liye ye line add karein -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl  text-center">
    <!-- Tailwind classes ka use karein -->
    <h1 class="text-indigo-700 font-bold text-4xl"> Welcome to the home Page!</h1>

    <form class="flex item-center justify center space-x-2" ">

        <input type="text" name="name" placeholder="Enter your name" class="border-2 border-black-300 rounded px-4 py-2 w-full mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <button type="submit" class="bg-indigo-700 text-white px-4 py-2 rounded hover:bg-indigo-800 transition duration-300">Click Me</button>
    </form>

</div>

</body>
</html>