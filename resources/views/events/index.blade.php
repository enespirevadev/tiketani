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
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->date}}</td>
                            <td>{{ $event->created_at->format('d.m.Y H:i') }}</td>
                            <td>
                                <a href="{{ route('events.edit', $event) }}">
                                    <x-primary-button class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
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
</x-app-layout>
