<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('customers.update', $customer) }}">
            @csrf
            @method('patch')
            
            <div>
                <x-input-label for="gender" :value="__('Gender')" />
                <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" :value="old('gender', $customer->gender)"
                    required autofocus autocomplete="gender" />
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <div>
                <x-input-label for="firstname" :value="__('First Name')" />
                <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full" :value="old('firstname', $customer->firstname)"
                    required autofocus autocomplete="firstname" />
                <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
            </div>

            <div>
                <x-input-label for="lastname" :value="__('Last Name')" />
                <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname', $customer->lastname)"
                    required autofocus autocomplete="lastname" />
                <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $customer->email)"
                    required autofocus autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="address_country" :value="__('Country')" />
                <x-text-input id="address_country" name="address_country" type="text" class="mt-1 block w-full" :value="old('address_country', $customer->address_country)"
                    required autofocus autocomplete="address_country" />
                <x-input-error class="mt-2" :messages="$errors->get('address_country')" />
            </div>

            <div>
                <x-input-label for="address_street" :value="__('Street Address')" />
                <x-text-input id="address_street" name="address_street" type="text" class="mt-1 block w-full" :value="old('address_street', $customer->address_street)"
                    required autofocus autocomplete="address_street" />
                <x-input-error class="mt-2" :messages="$errors->get('address_street')" />
            </div>

            <div>
                <x-input-label for="address_zipcode" :value="__('Zipcode')" />
                <x-text-input id="address_zipcode" name="address_zipcode" type="text" class="mt-1 block w-full" :value="old('address_zipcode', $customer->address_zipcode)"
                    required autofocus autocomplete="address_zipcode" />
                <x-input-error class="mt-2" :messages="$errors->get('address_zipcode')" />
            </div>
            
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('customers.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>