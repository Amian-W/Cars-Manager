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

            <form method="POST" action="{{ route('brands.store') }}">
                @csrf

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
                        {{ __('Add') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
