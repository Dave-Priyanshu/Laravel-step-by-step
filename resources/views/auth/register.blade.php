<x-navlayout>
    <x-slot:title>Registration Page</x-slot:title>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <p class="mb-4 text-gray-600 text-center">"Creating an account is the first step to joining our community. Welcome aboard!"</p>

    <form method="POST" action="/register" class="max-w-md mx-auto" id="registrationForm">
        @csrf

        <!-- Name Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="name" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Full Name</label>
            
            @error('name')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Email Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="email" value="{{ old('email') }}" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="email" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Email Address</label>
            
            @error('email')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="password" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            
            @error('password')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Confirm Password Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="password_confirmation" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm Password</label>
            
            @error('password_confirmation')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="flex justify-end space-x-4">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Register</button>
            <a href="/login" class="bg-gray-600 text-white px-5 py-2.5 rounded-lg hover:bg-gray-700">Already have an account?</a>
        </div>
    </form>
</x-navlayout>
