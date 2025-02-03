<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Temperature Log') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if ($errors->any())
            <div class="mb-4 p-4 text-red-700 bg-red-100 border border-red-400 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form class="max-w-sm mx-auto" action="{{ route('temperatureLogs.save') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-x-4">
                <div class="mb-5">
                    <label for="Temperature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature</label>
                    <input value="{{ old('temperature', 0.00) }}" type="number" name="temperature" step="0.01"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                           @error('temperature') border-red-500 @enderror" required/>

                    @error('temperature')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="Unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit</label>
                    <input value="{{ old('unit') }}" type="text" name="unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    @error('unit') border-red-500 @enderror" required />

                    @error('unit')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Done By" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Done By</label>
                    <input value="{{ old('done_by') }}" type="text" name="done_by" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    @error('done_by') border-red-500 @enderror" required />

                    @error('done_by')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
        </div>
    </div>
</x-app-layout>