<x-layout>
    <x-slot:title>Create</x-slot:title>
    <div
        class="flex bg-gray-100 w-1/2 mx-auto mt-20 rounded-xl py-10 items-center flex-col gap-y-10 shadow-lg shadow-primary-600">
        <h1 class="text-2xl font-bold">Create your file <span class="text-primary-600">Image</span></h1>
        <form action="{{ route('public-foto.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-5 items-center">
                <div class="flex flex-col w-full gap-y-2">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}"
                        class="rounded-md outline outline-2 border-none outline-gray-500 
                        focus:ring-2 focus:ring-primary-600 placeholder:text-gray-800 text-gray-800 
                        @error('name') outline-red-500 @enderror">
                    @error('name')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-2 w-full">
                    <label for="foto">Image</label>
                    <input type="file" name="foto" value="{{ old('foto') }}"
                        class="rounded-md outline-1 outline @error('foto') outline-red-500 @enderror" />
                    @error('foto')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"
                    class="bg-primary-600 hover:bg-primary-700 text-white py-1 px-4 rounded-md mt-10">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
