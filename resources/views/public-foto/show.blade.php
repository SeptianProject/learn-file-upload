<x-layout>
    <x-slot:title>
        Detail
    </x-slot:title>
    <div
        class="flex flex-col gap-y-10 bg-gray-100 w-1/2 mx-auto my-10 rounded-xl p-10 items-center shadow-lg shadow-primary-600">
        <div class="text-2xl font-semibold text-gray-800 flex flex-col  w-full">
            <h1>Detail <span class="text-primary-600">Image</span> from <br></h1>
            <span>{{ $publicFoto->name }}</span>
        </div>
        <img class="size-full object-cover rounded-md" src="{{ asset('storage/' . $publicFoto->path) }}" alt="image" />
    </div>
</x-layout>
