<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
    @foreach ($job as $jobb)
    <li>
        <a href="/job/{{ $jobb['id']}}" class="text-blue-500 hover:underline">
        <strong>{{ $jobb['Title'] }} </strong> : pays {{ $jobb['Salary'] }} per year.
        </a>
    </li>
    @endforeach
    </ul>
</x-layout>
