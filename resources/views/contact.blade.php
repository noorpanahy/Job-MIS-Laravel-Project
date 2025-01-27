<x-layout>
    <x-slot:heading>
        Contact Ways
    </x-slot:heading>
<ul>
@foreach ($contacts as $contact)
    <li><a href="/contacts/{{$contact['id']}}" class="text-blue-500 hover:underline">
        <strong>
            {{$contact['title']}}
        </strong>
        : Name {{$contact['name']}}
        </a>
    </li>
@endforeach
</ul>

</x-layout>

