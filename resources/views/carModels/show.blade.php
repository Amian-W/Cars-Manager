<x-app-layout>
    <x-slot name="header">
        <x-primary-button class="ml-4">
            <a href="{{ route('carModels.index') }}">
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
                                {{ __('Model Id') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $carModel->id }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Model Name') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $carModel->name }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Launch Date') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $carModel->launch_date }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Brand') }}
                            </th>
                            <td class="px-6 py-3">
                                Id : {{ $carModel->brand_id }}
                                <br>
                                Name : {{ $carModel->brand->name }}
                                <br>
                                Manufacturer : {{ $carModel->brand->manufacturer }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Created at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $carModel->created_at }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ __('Updated at') }}
                            </th>
                            <td class="px-6 py-3">
                                {{ $carModel->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-600 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id </th>
                            <th scope="col" class="px-6 py-3">
                                Registration Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kilometrage
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Model	
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- populate brand data --}}
                        @forelse ($carModel->car as $car)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $car->id }}
                                </th>
                                <td class="px-6 py-3">
                                    {{ $car->registration_number }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $car->kilometrage }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $car->carModel->name }}
                                </td>
                            </tr>
                        @empty
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               
                            </th>
                            <td class="px-6 py-3">
                                
                            </td>
                            <td class="px-6 py-3">
                                
                            </td>
                            <td class="px-6 py-3">
                                
                            </td>
                        </tr>

                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr class="font-semibold text-gray-900 {{-- dark:text-white --}}">
                            <th scope="row" class="px-6 py-3 text-base">Total :</th>
                            <td class="px-6 py-3"> {{ count($carModel->car) }}</td>
                            <td class="px-6 py-3"></td>
                            <td class="px-6 py-3"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
