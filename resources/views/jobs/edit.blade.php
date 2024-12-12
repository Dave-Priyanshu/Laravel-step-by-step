<x-navlayout>
    <x-slot:title>Job Edit Page</x-slot:title>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="max-w-md mx-auto" id="jobForm">
        @csrf
        @method('PATCH')
        <!-- Job Title Input -->
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="title" id="title" value="{{ $job->title }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
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
            <input type="text" name="salary" id="salary" value="{{ $job->salary }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
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

        <div class="flex justify-between items-center">
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">Update</button>

                <a href="/jobs/{{ $job->id }}" class="bg-gray-600 text-white px-5 py-2.5 rounded-lg hover:bg-gray-700">Cancel</a>
            </div>
        </div>
    </form>

    <!-- Delete Button Outside Form -->
    <div class="flex justify-center ">
        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-5 py-2.5 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300"
                    onclick="return confirm('Are you sure you want to delete this job?');">
                Delete
            </button>
        </form>
    </div>
</x-navlayout>
