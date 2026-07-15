<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-indigo-100 via-purple-50 to-pink-100 min-h-screen flex items-center justify-center p-4 font-sans">

    <div class="bg-white/80 backdrop-blur-lg p-8 rounded-3xl shadow-2xl w-full max-w-2xl border border-white/20">

        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
            </div>
            <h1 class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 font-extrabold text-4xl">QR Generator</h1>
            <p class="text-gray-500 mt-2">Create Contact QR in 1 Second</p>
        </div>

        <form method="POST" action="{{ route('qr.generate') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 font-bold mb-2">👤 Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Rahul Kumar"
                    class="w-full bg-gray-50 border-2 border-gray-200 px-4 py-3 rounded-xl focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none transition">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">📱 Mobile</label>
                    <input type="text" name="mobile" value="{{ old('mobile') }}" placeholder="9876543210"
                        class="w-full bg-gray-50 border-2 border-gray-200 px-4 py-3 rounded-xl focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none transition">
                    @error('mobile') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">📧 Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="abc@mail.com"
                        class="w-full bg-gray-50 border-2 border-gray-200 px-4 py-3 rounded-xl focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none transition">
                    @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-4 rounded-xl hover:shadow-2xl font-bold text-lg transform hover:-translate-y-1 transition duration-300">
                Generate QR Code ✨
            </button>
        </form>

        @if(session('qr'))
        <div class="mt-8 text-center border-t-2 border-dashed border-gray-200 pt-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Your QR is Ready!</h2>
            <div class="bg-white p-4 rounded-2xl inline-block shadow-lg border">
                <img src="data:image/svg+xml;base64,{{ session('qr') }}" alt="Contact QR code" class="mx-auto w-60 h-60">
            </div>
            <div class="mt-4 text-left bg-indigo-50 p-4 rounded-xl">
                <p><b>Name:</b> {{ session('data.name') }}</p>
                <p><b>Mobile:</b> {{ session('data.mobile') }}</p>
                <p><b>Email:</b> {{ session('data.email') }}</p>
            </div>
            <a href="data:image/svg+xml;base64,{{ session('qr') }}" download="qr-{{ session('data.name') }}.svg"
                class="mt-4 inline-block bg-green-500 text-white px-6 py-3 rounded-xl hover:bg-green-600 font-semibold">Download QR</a>
        </div>
        @endif
    </div>
</body>
</html>
