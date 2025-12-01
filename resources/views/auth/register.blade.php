<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | T-Book</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2 relative">

       {{-- Decorative Circles --}}
        <div class="absolute top-0 left-0 pointer-events-none">
            <div class="absolute -top-32 -left-32 w-64 h-64 bg-gray-200 rounded-full opacity-60"></div>
        </div>

        {{-- LEFT SIDE --}}
        <div class="flex items-center px-8 md:px-12 lg:px-32 py-8 relative">
            <div class="max-w-[380px] w-full">
                
                {{-- Header --}}
                <h1 class="text-[26px] font-semibold leading-snug text-gray-900">
                    Sign up to access your<br>
                    T-Book library
                </h1>

                <p class="text-[12px] text-gray-500 mt-2.5 leading-relaxed">
                    Sign up to access your digital library, manage borrowed books,
                    check availability, and explore curated learning resources—all in one place.
                </p>

                {{-- Validation --}}
                @if ($errors->any())
                    <div class="mt-4 bg-red-50 text-red-600 rounded-lg p-2.5 text-xs space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <p>• {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                {{-- FORM --}}
                <form action="/register" method="POST" class="mt-6 space-y-3.5">
                    @csrf

                    {{-- Name --}}
                    <div class="space-y-1">
                        <label class="block font-semibold text-[13px] text-gray-900">Name</label>
                        <input type="text" name="name"
                            placeholder="User Example"
                            value="{{ old('name') }}"
                            class="w-full border-2 border-gray-300 rounded-full px-4 py-2 text-[13px]
                                   focus:ring-0 focus:border-blue-500 outline-none transition placeholder:text-gray-400">
                    </div>

                   
                    {{-- Email --}}
                    <div class="space-y-1">
                        <label class="block font-semibold text-[13px] text-gray-900">Email</label>
                        <div class="relative">
                            <img src="{{ asset('assets/images/mail.svg') }}" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 opacity-60">
                            <input type="email" name="email"
                                placeholder="emailexample@gmail.com"
                                value="{{ old('email') }}"
                                class="w-full border-2 border-gray-300 rounded-full pl-10 pr-4 py-2 text-[13px]
                                 focus:ring-0 focus:border-blue-500 outline-none transition placeholder:text-gray-400">
                        </div>
                    </div>


                    {{-- Password --}}
                    <div class="space-y-1">
                        <label class="block font-semibold text-[13px] text-gray-900">Password</label>
                        <div class="relative">
                            <img src="{{ asset('assets/images/eyes.png') }}" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 opacity-60">
                            <input type="password" name="password"
                                placeholder="● ● ● ●"
                                class="w-full border-2 border-gray-300 rounded-full pl-10 pr-4 py-2 text-[13px]
                                       focus:ring-0 focus:border-blue-500 outline-none transition">
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="space-y-1">
                        <label class="block font-semibold text-[13px] text-gray-900">Confirm Password</label>
                        <div class="relative">
                            <img src="{{ asset('assets/images/eyes.png') }}" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 opacity-60">
                            <input type="password" name="password_confirmation"
                                placeholder="● ● ● ●"
                                class="w-full border-2 border-gray-300 rounded-full pl-10 pr-4 py-2 text-[13px]
                                       focus:ring-0 focus:border-blue-500 outline-none transition">
                        </div>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full bg-[#6B7C93] text-white py-2.5 rounded-full mt-4
                               font-semibold text-[14px] hover:bg-[#5a6a7f] transition">
                        Sign up
                    </button>

                    {{-- OR --}}
                    <div class="flex items-center gap-3 pt-2">
                        <hr class="flex-1 border-gray-300">
                        <span class="text-[12px] text-gray-500">or</span>
                        <hr class="flex-1 border-gray-300">
                    </div>

                    {{-- Social Buttons --}}
                    <div class="flex justify-center gap-3 pt-1">
                        <button type="button"
                            class="w-11 h-11 rounded-full border-2 border-gray-300 flex items-center justify-center 
                                   hover:bg-gray-50 transition">
                        
                                   <img src="{{ asset('assets/images/google.png') }}" class="w-4.5">
                        </button>

                        <button type="button"
                            class="w-11 h-11 rounded-full border-2 border-gray-300 flex items-center justify-center 
                                   hover:bg-gray-50 transition text-[20px]">
                            <img src="{{ asset('assets/images/apple.png') }}" class="w-4.5">
                        </button>
                    </div>

                    <p class="text-[12px] text-gray-600 text-center mt-3">
                        have an account?
                        <a href="/login" class="text-blue-600 font-semibold hover:underline">Sign In</a>
                    </p>
                </form>
            </div>
        </div>

        {{-- RIGHT IMAGE --}}
        <div class="hidden md:flex items-center justify-center p-8 relative">
            <img src="{{ asset('assets/images/ilustration.png') }}"
                 class="w-[420px] max-w-full select-none">
        </div>

    </div>

</body>
</html>