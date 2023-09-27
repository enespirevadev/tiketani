<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
            <a href="{{ route('events.create') }}">
                <x-primary-button class="ml-5 mt-4">{{ __('Create Event') }}</x-primary-button>
            </a>
        </h2>
    </x-slot>

    <div class="max-w-1xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Tournament</th>
                                        <th scope="col" class="px-6 py-4">Venue</th>
                                        <th scope="col" class="px-6 py-4">Available Seats</th>
                                        <th scope="col" class="px-6 py-4">Team A</th>
                                        <th scope="col" class="px-6 py-4">Team B</th>
                                        <th scope="col" class="px-6 py-4">Start Date</th>
                                        <th scope="col" class="px-6 py-4">End Date</th>
                                        <th scope="col" class="px-6 py-4">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $event->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $event->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                {{ $tournaments[$event->tournament_id] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venues[$event->venue_id] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $event->available_seats }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $teams[$event->teamA_id] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $teams[$event->teamB_id] }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $event->start }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $event->end }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="{{ route('events.edit', $event) }}">
                                                    <x-primary-button
                                                        class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                                </a>

                                                <form method="POST" action="{{ route('events.destroy', $event) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('events.destroy', $event)"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Delete') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
