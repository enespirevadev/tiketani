<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
            <a href="{{ route('customers.create') }}">
                <x-primary-button class="ml-5 mt-4">{{ __('Create Customer') }}</x-primary-button>
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
                                        <th scope="col" class="px-6 py-4">Gender</th>
                                        <th scope="col" class="px-6 py-4">First Name</th>
                                        <th scope="col" class="px-6 py-4">Last Name</th>
                                        <th scope="col" class="px-6 py-4">Email</th>
                                        <th scope="col" class="px-6 py-4">Country</th>
                                        <th scope="col" class="px-6 py-4">Street Address</th>
                                        <th scope="col" class="px-6 py-4">Zipcode</th>
                                        <th scope="col" class="px-6 py-4">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $customer->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->gender }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->firstname }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->lastname }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->address_country }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->address_street }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $customer->address_zipcode }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="{{ route('customers.edit', $customer) }}">
                                                    <x-primary-button
                                                        class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                                </a>

                                                <form method="POST" action="{{ route('customers.destroy', $customer) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('customers.destroy', $customer)"
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
