<x-app-layout>
    <x-slot name="header">
        <x-primary-button class="ml-4">
            <a href="{{ route('brands.index') }}">
                {{ __('Back') }}
            </a>
        </x-primary-button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <table class="w-full text-sm text-left text-gray-600 dark:text-gray-400">
                    <tbody>
                        {{-- populate brand data --}}
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Brand Id') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $brand->id }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Brand Name') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $brand->name }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Brand Manufacturer') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $brand->manufacturer }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Created at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $brand->created_at }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Updated at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $brand->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
