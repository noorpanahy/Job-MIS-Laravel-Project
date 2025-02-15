<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <div class="space-y-4">
    @foreach ($job as $jobb)
        <a href="/job/{{ $jobb['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>

            <div>
            <strong>{{ $jobb['Title'] }} </strong> : pays {{ $jobb['Salary'] }} per year.
            </div>
        </a>
    </li>
    @endforeach
    </div>
</x-layout>
