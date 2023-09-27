<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tournaments') }}
            <a href="{{ route('tournaments.create') }}">
                <x-primary-button class="ml-5 mt-4">{{ __('Create Tournament') }}</x-primary-button>
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
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tournaments as $tournament)
                        <tr>
                            <td>{{ $tournament->id }}</td>
                            <td>{{ $tournament->name }}</td>
                            <td>{{ $tournament->description }}</td>
                            <td>
                                <a href="{{ route('tournaments.edit', $tournament) }}">
                                    <x-primary-button class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                </a>

                                <form method="POST" action="{{ route('tournaments.destroy', $tournament) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('tournaments.destroy', $tournament)"
                                        onclick="tournament.preventDefault(); this.closest('form').submit();">
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
