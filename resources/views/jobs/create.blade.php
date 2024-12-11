<x-navlayout>
    <x-slot:heading>
        Create a New Job
    </x-slot:heading>

    <p class="mb-4 text-gray-600 text-center">"Creating a job can transform a community by fostering growth, opportunity, and progress."</p>

    <form method="POST" action="/jobs" class="max-w-md mx-auto" id="jobForm">
        @csrf
        <!-- Job Title Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="title" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Job Title</label>
            
            @error('title')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
        @enderror
        
        </div>

        <!-- Salary Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="salary" id="salary" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="salary" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:scale-75 peer-focus:-translate-y-6">Salary</label>
            
            @error('salary')
            <div class="text-sm text-red-600 mt-1 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 4.5c7.18 0 9 1.5 9 9s-1.5 9-9 9-9-1.5-9-9 1.5-9 9-9z" />
                </svg>
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="flex justify-end space-x-4">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Save</button>
            <a href="/jobs" class="bg-gray-600 text-white px-5 py-2.5 rounded-lg hover:bg-gray-700">Cancel</a>
            <!-- Clear Button -->
            {{-- <button type="button" onclick="document.getElementById('jobForm').reset();" class="bg-red-600 text-white px-5 py-2.5 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300">Clear</button> --}}
        </div>
    </form>
</x-navlayout>
