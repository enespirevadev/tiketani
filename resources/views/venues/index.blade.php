<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Venues') }}
            <a href="{{ route('venues.create') }}">
                <x-primary-button class="ml-5 mt-4">{{ __('Create Venue') }}</x-primary-button>
            </a>
        </h2>
    </x-slot>

    <div class="max-w-1xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Seats</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($venues as $venue)
                        <tr>
                            <td>{{ $venue->id }}</td>
                            <td>{{ $venue->name }}</td>
                            <td>{{ $venue->description }}</td>
                            <td>{{ $venue->location}}</td>
                            <td>{{ $venue->address }}</td>
                            <td>{{ $venue->seats }}</td>
                            <td>
                                <a href="{{ route('venues.edit', $venue) }}">
                                    <x-primary-button class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                </a>

                                <form method="POST" action="{{ route('venues.destroy', $venue) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('venues.destroy', $venue)"
                                        onclick="venue.preventDefault(); this.closest('form').submit();">
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
</x-app-layout>
