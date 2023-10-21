<form method="POST" action="{{ route('home.search') }}">
    @csrf

    <div class="flex mx-30">
        <div
            class="flex flex-shrink-10 items-center justify-left  border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <x-input-label for="venue" />
            <select name="venue[]" data-te-select-init data-te-select-size="lg" data-te-select-placeholder="Please Select"
                multiple>
                @foreach ($venues as $venueId => $venue)
                    <option value="{{ $venueId }}">
                        {{ $venue }}
                    </option>
                @endforeach
            </select>
            <label data-te-select-label-ref>Venues: </label>
            <x-input-error :messages="$errors->get('venue_id')" class="mt-2" />
        </div>

        <div
            class="flex flex-shrink-0 items-center justify-left border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <x-input-label for="team_id" />
            <select name="team[]" data-te-select-init data-te-select-size="lg"
                data-te-select-placeholder="Please Select" multiple>
                @foreach ($teams as $teamId => $team)
                    <option value="{{ $teamId }}">
                        {{ $team }}
                    </option>
                @endforeach
            </select>
            <label data-te-select-label-ref>Teams: </label>
            <x-input-error :messages="$errors->get('team_id')" class="mt-2" />
        </div>

        <div
            class="flex flex-shrink-0 items-center justify-left border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <x-input-label for="tournament" />
            <select name="tournament[]" data-te-select-init data-te-select-size="lg"
                data-te-select-placeholder="Please Select" multiple>
                @foreach ($tournaments as $tournamentId => $tournament)
                    <option value="{{ $tournamentId }}">
                        {{ $tournament }}
                    </option>
                @endforeach
            </select>
            <label data-te-select-label-ref>Tournaments: </label>
            <x-input-error :messages="$errors->get('tournament_id')" class="mt-2" />
        </div>

        <div class="mx-12 mt-8">
            <x-input-label for="filterdate" />
            <div id="filterdate-datepicker" class="relative mb-3 datepicker" data-te-datepicker-init
                data-te-select-size="lg" data-te-inline="true" data-te-disable-past="true" data-te-input-wrapper-init>

                <x-text-input type="text" name="filterDate" id="form-filterdate"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    autofocus autocomplete="off" />

                <label for="form-filterdate"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select
                    a date</label>
            </div>
        </div>
        <div class="mx-5 mt-4 mb-7">
            <x-primary-button class="mt-4">{{ __('Filter') }}</x-primary-button>
        </div>
        <x-secondary-button type="reset" class="mx-5 mt-8 mb-10 bg-gray-600">
            Reset
        </x-secondary-button>
    </div>
</form>
