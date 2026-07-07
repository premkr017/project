<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl text-center">
        <h1 class="text-teal-700 font-bold text-4xl">Laravel URL Shortner</h1>

        <form class="flex items-center justify-center space-x-2">
            <input type="text" name="org_url" class="w-full border border-blur-400 px-4 py-2 rounded-2xl focus:ring-2">
        </form>
    </div>
</body>

</html>
