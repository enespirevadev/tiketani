<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
            <a href="{{ route('teams.create') }}">
                <x-primary-button class="ml-5 mt-4">{{ __('Create Team') }}</x-primary-button>
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
                        <th>Logo</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->logo }}</td>
                            <td>
                                <a href="{{ route('teams.edit', $team) }}">
                                    <x-primary-button class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                </a>

                                <form method="POST" action="{{ route('teams.destroy', $team) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('teams.destroy', $team)"
                                        onclick="team.preventDefault(); this.closest('form').submit();">
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
