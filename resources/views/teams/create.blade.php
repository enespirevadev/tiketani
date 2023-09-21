<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('teams.store') }}">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', '')"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            {{-- <div>
                <x-input-label for="logo" :value="__('Logo')" />
                <x-text-input id="logo" name="logo" type="text" class="mt-1 block w-full" :value="old('logo', '')"
                    required autofocus autocomplete="logo" />
                <x-input-error class="mt-2" :messages="$errors->get('logo')" />
            </div> --}}

            <div>
                <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
