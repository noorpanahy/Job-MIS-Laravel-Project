<x-layout>
    <x-slot:heading>
        Contact
    </x-slot:heading>

    <h2 class="font-blod text-lg"> <strong> {{ $contacts['title'] }} </strong></h2>
    <p>
        You can find the <strong class="text-black-900"> {{ $contacts['name'] }} </strong> on <strong class="text-blue-500
        hover:underline"> {{ $contacts['url'] }} </strong> link.
    </p>


</x-layout>

