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
</div>

</body>
</html>