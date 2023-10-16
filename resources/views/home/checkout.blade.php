<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('home.checkout', $event) }}" onsubmit="checkout({{ $event->id }})">
        @csrf

        <div class="mt-2">
            <x-input-label for="category" :value="__('Tickets')" />
            <select name="category" data-te-select-init>
                @foreach ($categories as $category => $categoryTitle)
                    <option value="{{ $category }}">
                        {{ $categoryTitle }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="seats" :value="__('Seats')" />
            <select name="seats" data-te-select-init>
                @foreach ($seats as $seat)
                    <option value="{{ $seat }}">
                        {{ $seat }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('seats')" class="mt-2" />
        </div>

        <hr class="mt-4 mb-4" />

        <div class="mt-2">
            <x-input-label for="gender" :value="__('Gender')" />
            <select name="gender" data-te-select-init>
                @foreach ($genders as $gender => $genderTitle)
                    <option value="{{ $gender }}">
                        {{ $genderTitle }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="firstname" :value="__('Firstname')" />
            <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="firstname" />
            <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
        </div>

        <div class="mt-2">
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="lastname" />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
        </div>

        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autofocus
                autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <hr class="mt-4 mb-4" />

        <div class="mt-2">
            <x-input-label for="address_country" :value="__('Country')" />
            <x-text-input id="address_country" name="address_country" type="text" class="mt-1 block w-full"
                value="Kosova" @disabled(true) required autofocus autocomplete="address_country" />
            <x-input-error class="mt-2" :messages="$errors->get('address_country')" />
        </div>

        <div class="mt-2">
            <x-input-label for="address_street" :value="__('Street')" />
            <x-text-input id="address_street" name="address_street" type="text" class="mt-1 block w-full"
                 autofocus autocomplete="address_street" />
            <x-input-error class="mt-2" :messages="$errors->get('address_street')" />
        </div>

        <div class="mt-2">
            <x-input-label for="address_zipcode" :value="__('Zipcode')" />
            <x-text-input id="address_zipcode" name="address_zipcode" type="text" class="mt-1 block w-full"
                 autofocus autocomplete="address_zipcode" />
            <x-input-error class="mt-2" :messages="$errors->get('address_zipcode')" />
        </div>

        <div class="mt-2">
            <x-primary-button class="mt-4">{{ __('Buy Tickets') }}</x-primary-button>
        </div>
    </form>
</div>

