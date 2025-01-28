<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Purchases') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Magna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hikmat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Primer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adam
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Miscellaneous
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($purchases as $purchase)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $purchase->date->format('d-m-Y') }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $purchase->magna }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $purchase->hikmat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $purchase->primer }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $purchase->jaan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $purchase->adam }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $purchase->miscellaneous }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</x-app-layout>