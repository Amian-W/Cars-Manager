<x-app-layout>
    <x-slot name="header">
        <x-primary-button class="ml-4">
            <a href="{{ route('brands.create') }}">
            {{ __('Add new brand') }}
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
                                Brand name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Manufacturer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{-- Actions --}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- populate brand data --}}
                        @foreach ($brands as $brand)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $brand->id }}
                                </th>
                                <td class="px-6 py-3">
                                    {{ $brand->name }}
                                </td>
                                <td class="px-6 py-3">
                                    {{ $brand->manufacturer }}
                                </td>
                                <td class=" px-6 py-3 flex flex-row flex-wrap justify-between">
                                    <x-primary-button>
                                        <a href="{{route('brands.show', $brand->id)}}"
                                        >Details</a>
                                    </x-primary-button>
                                    <x-secondary-button>
                                        <a href="{{route('brands.edit', $brand->id)}}"
                                        >Edit</a>
                                    </x-secondary-button>
                                    
                                    <form method="post" action="{{ route('brands.destroy', $brand->id) }}">
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
                            <th scope="row" class="px-6 py-3 text-base">Total : </th>
                            <td class="px-6 py-3">{{ count($brands) }}</td>
                            <td class="px-6 py-3"></td>
                            <td class="px-6 py-3"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
