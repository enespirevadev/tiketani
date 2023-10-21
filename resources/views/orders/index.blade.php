<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
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
                                        <th scope="col" class="px-6 py-4">Customer</th>
                                        <th scope="col" class="px-6 py-4">Event</th>
                                        <th scope="col" class="px-6 py-4">Order Number</th>
                                        <th scope="col" class="px-6 py-4">Order Date</th>
                                        <th scope="col" class="px-6 py-4">Order Status</th>
                                        <th scope="col" class="px-6 py-4">Seats</th>
                                        <th scope="col" class="px-6 py-4">Category</th>
                                        <th scope="col" class="px-6 py-4">Category Price</th>
                                        <th scope="col" class="px-6 py-4">Total Price</th>
                                        <th scope="col" class="px-6 py-4">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $order->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="/customers/{{ $order->customer->id }}/edit">
                                                    {{ $order->customer->firstname . ' ' . $order->customer->lastname }}
                                                </a>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="/events/{{ $order->event->id }}/edit">
                                                    {{ $order->event->name }}
                                                </a>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->order_number }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->order_date }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->order_status }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->seats }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->category }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->category_price }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->total_price }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="{{ route('orders.edit', $order) }}">
                                                    <x-primary-button
                                                        class="ml-5 mt-4">{{ __('Edit') }}</x-primary-button>
                                                </a>

                                                {{-- <form method="POST" action="{{ route('orders.destroy', $order) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('orders.destroy', $order)"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
</x-app-layout>
