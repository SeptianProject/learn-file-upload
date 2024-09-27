<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg ">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-auto">
                <h1 class="text-2xl font-bold text-gray-700">
                    Upload File <span class="text-primary-600">Sobat</span>
                </h1>
            </div>
            {{-- <div class="w-full md:w-1/3 mx-auto">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div> --}}
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href="{{ route('public-foto.create') }}" type="button"
                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add product
                </a>
                {{-- more button --}}
            </div>
        </div>
        <div class="overflow-x-hidden">
            <table class="flex flex-col text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs py-5 text-gray-700 uppercase bg-slate-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="grid grid-cols-4 grid-flow-col text-left items-center">
                        <th class="pl-10">No.</th>
                        <th class="">Foto name</th>
                        <th class="">Path</th>
                        <th class="pl-10">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($public_fotos as $index => $item)
                        <tr class="border-b grid grid-cols-4 py-2 grid-flow-col items-center text-left">
                            <th class="font-medium text-gray-900 pl-10">
                                {{ $item->id }}
                            </th>
                            <td class="">
                                <div class="flex flex-col">
                                    <h1 class="text-base font-semibold">{{ $item->name }}</h1>
                                    <a class="text-primary-500 text-sm font-medium
                                    hover:text-primary-600 hover:underline-offset-2 hover:underline"
                                        href="{{ route('public-foto.show', $item->id) }}">
                                        Detail Foto
                                    </a>
                                </div>
                            </td>
                            <td class="">
                                <img class="size-24 object-contain" src="{{ asset('storage/' . $item->path) }}"
                                    alt="{{ $item->name }}" />
                            </td>
                            <td class="pl-10">
                                <div class="flex gap-x-3 items-center">
                                    <a href="{{ route('public-foto.edit', $item->id) }}"
                                        class="bg-primary-600 hover:bg-primary-700 
                                        text-white px-5 py-1 text-base rounded-md">
                                        Edit
                                    </a>
                                    <button
                                        class="bg-red-600 hover:bg-red-700 
                                        text-white px-5 py-1 text-base rounded-md">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
