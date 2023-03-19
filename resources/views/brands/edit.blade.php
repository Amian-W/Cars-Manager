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
                <div class="p-6 text-gray-900">
                    {{ __("Brand Id : ") }}
                    {{ $brand->id}}
                    <br>
                    {{ __("Brand Name : ") }}
                    {{ $brand->name}}
                    <br>
                    {{ __("Brand Manufacturer : ") }}
                    {{ $brand->manufacturer}}
                    <br>
                    {{ __("Created at : ") }}
                    {{ $brand->created_at}}
                    <br>
                    {{ __("Updated at : ") }}
                    {{ $brand->updated_at}}
                </div>
            </div>
            <form method="POST" action="{{ route('brands.update' , $brand->id) }}">
                @csrf
                @method('put')
                <!-- Brand Name -->
                <div>
                    <x-input-label for="name" :value="__('Brand Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Manufacturer -->
                <div class="mt-4">
                    <x-input-label for="manufacturer" :value="__('Manufacturer')" />
                    <x-text-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer"
                        :value="old('manufacturer')" required autocomplete="manufacturer" />
                        <x-input-error :messages="$errors->get('manufacturer')" class="mt-2" />
                </div>
                <div>
                    <x-primary-button class="mt-4 px-4 ">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
