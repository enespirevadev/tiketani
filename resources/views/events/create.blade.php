<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('events.store') }}">
            @csrf

            <div class="mt-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', '')"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mt-2">
                <x-input-label for="description" :value="__('Description')" />
                <textarea name="description" placeholder="{{ __('Enter your Event description here ...') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="mt-2">
                <x-input-label for="start" :value="__('Start Date')" />
                <div id="start-datetimepicker" class="relative mb-3 datetimepicker" data-te-date-timepicker-init
                    data-te-inline="true" data-te-disable-past="true" data-te-input-wrapper-init>

                    <x-text-input type="text" name="start" id="form-event-start"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        required autofocus autocomplete="off" />

                    <label for="form-event-start"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select
                        a event start date</label>
                </div>
            </div>

            <div class="mt-2">
                <x-input-label for="end" :value="__('End Date')" />
                <div id="end-datetimepicker" class="relative mb-3 datetimepicker" data-te-date-timepicker-init
                    data-te-input-wrapper-init data-te-inline="true" data-te-disable-past="true">
                    <x-text-input type="text" name="end" id="form-event-end"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        required autofocus autocomplete="off" />
                    <label for="form-event-end"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select
                        a event end date</label>
                </div>
            </div>

            <hr class="mt-4 mb-4" />

            <div class="mt-2">
                <x-input-label for="tournament_id" :value="__('Tournament')" />
                <select name="tournament_id" data-te-select-init>
                    @foreach ($tournaments as $tournament)
                        <option value="{{ $tournament->id }}">
                            {{ $tournament->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tournament_id')" class="mt-2" />
            </div>

            <div class="mt-2">
                <x-input-label for="venue_id" :value="__('Venue')" />
                <select name="venue_id" data-te-select-init>
                    @foreach ($venues as $venue)
                        <option value="{{ $venue->id }}">
                            {{ $venue->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('venue_id')" class="mt-2" />
            </div>

            <div class="mt-2">
                <x-input-label for="available_seats" :value="__('Available Seats')" />
                <x-text-input id="available_seats" name="available_seats" type="number" class="mt-1 block w-full"
                    :value="old('available_seats', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('available_seats')" />
            </div>


            <div class="mt-2">
                <x-input-label for="teamA_id" :value="__('Team A')" />
                <select name="teamA_id" data-te-select-init>
                    @foreach ($teams as $teamA)
                        <option value="{{ $teamA->id }}">
                            {{ $teamA->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('teamA_id')" class="mt-2" />
            </div>

            <div class="mt-2">
                <x-input-label for="teamB_id" :value="__('Team B')" />
                <select name="teamB_id" data-te-select-init>
                    @foreach ($teams as $teamB)
                        <option value="{{ $teamB->id }}">
                            {{ $teamB->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('teamB_id')" class="mt-2" />
            </div>

            <hr class="mt-4 mb-4" />

            <div class="mt-2">
                <x-input-label for="categoryA_price" :value="__('Category A (Price in EUR)')" />
                <x-text-input id="categoryA_price" name="categoryA_price" type="number" class="mt-1 block w-full"
                    :value="old('categoryA_price', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('categoryA_price')" />
            </div>

            <div class="mt-2">
                <x-input-label for="categoryB_price" :value="__('Category B (Price in EUR)')" />
                <x-text-input id="categoryB_price" name="categoryB_price" type="number" class="mt-1 block w-full"
                    :value="old('categoryB_price', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('categoryB_price')" />
            </div>

            <div class="mt-2">
                <x-input-label for="categoryC_price" :value="__('Category C (Price in EUR)')" />
                <x-text-input id="categoryC_price" name="categoryC_price" type="number" class="mt-1 block w-full"
                    :value="old('categoryC_price', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('categoryC_price')" />
            </div>

            <div class="mt-2">
                <x-input-label for="categoryD_price" :value="__('Category D (Price in EUR)')" />
                <x-text-input id="categoryD_price" name="categoryD_price" type="number" class="mt-1 block w-full"
                    :value="old('categoryD_price', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('categoryD_price')" />
            </div>

            <hr class="mt-4 mb-4" />

            <div class="mt-2">
                <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
