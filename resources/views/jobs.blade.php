<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue hover:underline hover:text-blue-500">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
