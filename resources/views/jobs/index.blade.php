<x-navlayout>
    <x-slot:heading>
        Job's Page
    </x-slot:heading>

    <h1 class="text-2xl font-semibold mb-4">Welcome to Jobs Page</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-5">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" 
               class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg hover:border-blue-500 transition">
               <!-- Job Title -->
                <h2 class="text-xl font-bold text-gray-800 mb-2">
                    <span class="text-blue-500">Job Title:</span> {{ $job['title'] }}
                </h2>
                <!-- Employer Information -->
                <div class="text-gray-500 text-sm mb-4">
                    <span class="font-semibold text-gray-700">Employer:</span> 
                    <span class="text-gray-800">{{ $job->employer->name }}</span>
                </div>
                <!-- Salary Info -->
                <p class="text-gray-600">
                    <span class="font-semibold text-gray-700">Salary:</span> 
                    <span class="text-green-600 font-bold">${{ number_format($job['salary'], 2) }}</span> per year.
                </p>
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-navlayout>

