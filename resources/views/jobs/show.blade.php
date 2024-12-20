<x-navlayout>
    <x-slot:title>Job Detail Page</x-slot:title>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="flex justify-center items-center">
        <div class="w-full max-w-xl bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2m-2 0a6 6 0 0112 0v2m3 10h-6m-6 0H5m14 0a2 2 0 01-2-2H7a2 2 0 01-2 2m14 0a2 2 0 01-2 2M9 19a2 2 0 01-2 2m6-16v2m4 4H7" />
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800 ml-4">{{ $job->title }}</h1>
                </div>
                <p class="text-gray-600 mb-6">
                    This position offers an annual salary of 
                    <span class="text-green-500 font-bold">${{ number_format($job->salary, 2) }}</span>.
                </p>
                <div class="flex justify-between items-center">
                    <a href="/jobs" class="text-blue-500 hover:underline">← Back to Job Listings</a>
                    <div class="flex space-x-4">

                        <!-- Edit Job Button -->
                        @can('edit',$job)
                            <a href="/jobs/{{ $job->id }}/edit" class="px-6 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">Edit Job</a>
                        @endcan

                        <!-- Apply Now Button -->
                        <button class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-navlayout>
