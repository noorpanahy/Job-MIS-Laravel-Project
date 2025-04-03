<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        this job pays you {{ $job->salary}} per year.
    </p>

    <p class="mt-6">
        <a href="/jobs/ {{$job->id}}/edit">
        <button class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white
        border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300
        focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800
        dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Edit Job</button>
        </a>
    </p>

</x-layout>
