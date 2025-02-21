<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-lg p-8">
        <h2 class="text-3xl font-bold text-blue-600 mb-4 text-center">Welcome</h2>
        <p class="text-gray-600 mb-6 text-center">Log in</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    required autofocus
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password" type="password" name="password" placeholder="Password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                    Log in
                </button>
            </div>
        </form>

        <a href="{{ route('register') }}" class="text-center text-gray-600 block mt-4">
            {{ __('Register') }}
        </a>
    </div>
</body>

</html>
