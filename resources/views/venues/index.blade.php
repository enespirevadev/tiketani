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

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">Name</th>
                                        <th scope="col" class="px-6 py-4">Description</th>
                                        <th scope="col" class="px-6 py-4">Location</th>
                                        <th scope="col" class="px-6 py-4">Address</th>
                                        <th scope="col" class="px-6 py-4">Seats</th>
                                        <th scope="col" class="px-6 py-4">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($venues as $venue)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $venue->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venue->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venue->description }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venue->location }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venue->address }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $venue->seats }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="{{ route('venues.edit', $venue) }}">
                                                    <x-primary-button
                                                        class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                                </a>

                                                <form method="POST" action="{{ route('venues.destroy', $venue) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('venues.destroy', $venue)"
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
</x-app-layout>
