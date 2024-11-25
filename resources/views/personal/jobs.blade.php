<x-navlayout>
    <x-slot:heading>
        Job's Page
    </x-slot:heading>

<h1 class="text-2xl font-semibold mb-4"> Welcome to Jobs Page</h1>
<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}</strong>: Pay's {{$job['salary']}} per year.
            </a>
        </li>  
    @endforeach
</ul>

</x-navlayout>