<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['Title']}}</h2>

    <p>
        this job pays you {{ $job['Salary']}} per year.
    </p>

</x-layout>
