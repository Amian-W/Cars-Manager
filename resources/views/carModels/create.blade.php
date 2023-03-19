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

            <form method="POST" action="{{ route('carModels.store') }}">
                @csrf

                <!-- carModel -->
                <div>
                    <x-input-label for="name" :value="__('Car Model')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- launch_date -->
                <div class="mt-4">
                    <x-input-label for="launch_date" :value="__('Date of launch')" />
                    <x-text-input id="launch_date" class="block mt-1 w-full" type="date" name="launch_date"
                        :value="old('launch_date')" required autocomplete="launch_date" />
                        <x-input-error :messages="$errors->get('launch_date')" class="mt-2" />
                </div>

                <!-- brand_id -->
                <div class="mt-4">
                    <x-input-label for="brand_id" :value="__('Brand')" />
                    <x-select id="select" class="block w-full" name="brand_id">
                        <option value="" selected disabled hidden>{{ __('Choose an option') }}</option>
                    @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                    </x-select>
                    <x-input-error :messages="$errors->get('brand_id')" class="mt-2" />
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
