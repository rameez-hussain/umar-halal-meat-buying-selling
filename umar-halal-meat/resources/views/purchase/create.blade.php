<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Purchases') }}
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
        
        <form class="max-w-sm mx-auto" action="{{ route('purchases.save') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-x-4">
                <div class="mb-5">
                    <label for="Magna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Magna</label>
                    <input value="{{ old('magna', 0.00) }}" type="number" name="magna" min="0" step="0.01"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                           @error('magna') border-red-500 @enderror" required/>

                    @error('magna')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="Hikmat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hikmat</label>
                    <input value="{{ old('hikmat', 0.00) }}" type="number" name="hikmat" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    @error('hikmat') border-red-500 @enderror" required />

                    @error('hikmat')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Primer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer</label>
                    <input value="{{ old('primer', 0.00) }}" type="number" name="primer" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    @error('primer') border-red-500 @enderror" required />

                    @error('primer')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Jaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jaan</label>
                    <input value="{{ old('jaan', 0.00) }}" type="number" name="jaan" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                    @error('jaan') border-red-500 @enderror" required />

                    @error('jaan')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Adam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adam</label>
                    <input value="{{ old('adam', 0.00) }}" type="number" name="adam" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     @error('adam') border-red-500 @enderror" required />

                    @error('adam')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Millat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Millat</label>
                    <input value="{{ old('millat', 0.00) }}" type="number" name="millat" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     @error('millat') border-red-500 @enderror" required />

                    @error('millat')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="Eggs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Eggs</label>
                    <input value="{{ old('eggs', 0.00) }}" type="number" name="eggs" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     @error('eggs') border-red-500 @enderror" required />

                    @error('eggs')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="miscellaneous" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Miscellaneous</label>
                    <input value="{{ old('miscellaneous', 0.00) }}" type="number" name="miscellaneous" min="0" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     @error('miscellaneous') border-red-500 @enderror" required />

                    @error('miscellaneous')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 col-span-2">
                    <label for="Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input value="{{ old('date') }}" type="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     @error('date') border-red-500 @enderror" required />

                    @error('date')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
  
        </div>
    </div>

    
</x-app-layout>