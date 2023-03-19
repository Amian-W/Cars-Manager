<x-app-layout>
    <x-slot name="header">
        <x-primary-button class="ml-4">
            <a href="{{ route('carModels.create') }}">
            {{ __('Add new Model') }}
        </a>
        </x-primary-button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <table class="w-full text-sm text-left text-gray-600 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id </th>
                            <th scope="col" class="px-6 py-3">
                                Model name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Launch Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{-- Actions --}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- populate model data --}}
                        @foreach ($carModels as $carModel)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $carModel->id }}
                                </th>
                                <td class="px-6 py-3">
                                    {{ $carModel->name }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $carModel->launch_date }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $carModel->brand->name }}
                                </td>
                                <td class=" px-6 py-3 flex flex-row flex-wrap justify-between">
                                    <x-primary-button>
                                        <a href="{{route('carModels.show', $carModel->id)}}"
                                        >Details</a>
                                    </x-primary-button>
                                    <x-secondary-button>
                                        <a href="{{route('carModels.edit', $carModel->id)}}"
                                        >Edit</a>
                                    </x-secondary-button>
                                    
                                    <form method="post" action="{{ route('carModels.destroy', $carModel->id) }}">
                                        @csrf
                                        @method('delete')
                                        <x-danger-button >
                                            {{ __('Delete') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="font-semibold text-gray-900 {{-- dark:text-white --}}">
                            <th scope="row" class="px-6 py-3 text-base">Total : {{ count($carModels) }}</th>
                            <td class="px-6 py-3"></td>
                            <td class="px-6 py-3"></td>
                            <td class="px-6 py-3"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
