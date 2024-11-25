<x-navlayout>
    <x-slot:heading>
        Job's Listing Page
    </x-slot:heading>

    <h1 class="text-2xl font-semibold mb-4"> Welcome to the Job Listing Page</h1>

    <h2 class="font-bold text-lg">{{ $job['title'] }}:</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

</x-navlayout>
