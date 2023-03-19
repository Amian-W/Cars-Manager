<x-app-layout>
    <x-slot name="header">
        <x-primary-button class="ml-4">
            <a href="{{ route('cars.index') }}">
                {{ __('Back') }}
            </a>
        </x-primary-button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <table class="w-full text-sm text-left text-gray-600 dark:text-gray-400">
                    <tbody>
                        {{-- populate car data --}}
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Car Id') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $car->id }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Registration') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $car->registration_number }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Kilometrage') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $car->kilometrage }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Model') }}
                            </th>
                            <td class="px-6 py-3">
                                <strong>Model</strong> : {{ $car->carModel->name }}
                                <br>
                                <strong>Brand</strong> : {{ $car->carModel->brand->name }}
                                <br>
                                <strong>Launch Date</strong> : {{ $car->carModel->launch_date }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Created at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $car->created_at }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Updated at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $car->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
