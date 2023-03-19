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

            <form method="POST" action="{{ route('cars.store') }}">
                @csrf

                <!-- Registration Number -->
                <div>
                    <x-input-label for="registration_number" :value="__('Registration Number')" />
                    <x-text-input id="registration_number" class="block mt-1 w-full" type="text" name="registration_number" :value="old('registration_number')"
                        required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('registration_number')" class="mt-2" />
                </div>

                <!-- kilometrage -->
                <div class="mt-4">
                    <x-input-label for="kilometrage" :value="__('Kilometrage')" />
                    <x-text-input id="kilometrage" class="block mt-1 w-full" type="text" name="kilometrage"
                        :value="old('kilometrage')" required autocomplete="kilometrage" />
                        <x-input-error :messages="$errors->get('kilometrage')" class="mt-2" />
                </div>

                <!-- car_model_id -->
                <div class="mt-4">
                    <x-input-label for="car_model_id" :value="__('Model')" />
                    <x-select id="select" class="block w-full" name="car_model_id">
                        <option value="" selected disabled hidden>{{ __('Choose an option') }}</option>
                    @foreach ($carModels as $carmodel)
                    <option value="{{$carmodel->id}}">{{$carmodel->name}}</option>
                    @endforeach
                    </x-select>
                    <x-input-error :messages="$errors->get('car_model_id')" class="mt-2" />
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
