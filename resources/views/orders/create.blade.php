<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('orders.store') }}">
            @csrf

            <div>
                <x-input-label for="order_number" :value="__('Order Number')" />
                <x-text-input id="order_number" name="order_number" type="text" class="mt-1 block w-full" :value="old('order_number', '')"
                    required autofocus autocomplete="order_number" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="order_date" :value="__('Order Date')" />
                <x-text-input id="order_date" name="order_date" type="text" class="mt-1 block w-full" :value="old('order_date', '')"
                    required autofocus autocomplete="order_date" />
                <x-input-error class="mt-2" :messages="$errors->get('order_date')" />
            </div>

            <div>
                <x-input-label for="order_status" :value="__('Order Status')" />
                <x-text-input id="order_status" name="order_status" type="text" class="mt-1 block w-full" :value="old('order_status', '')"
                    required autofocus autocomplete="order_status" />
                <x-input-error class="mt-2" :messages="$errors->get('order_status')" />
            </div>

            <div class="mt-2">
                <x-input-label for="seats" :value="__('Seats')" />
                <x-text-input id="seats" name="seats" type="number" class="mt-1 block w-full"
                    :value="old('seats', '')" required autofocus autocomplete="off" />
                <x-input-error class="mt-2" :messages="$errors->get('seats')" />
            </div>

            <div>
                <x-input-label for="category" :value="__('Category')" />
                <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" :value="old('category', '')"
                    required autofocus autocomplete="category" />
                <x-input-error class="mt-2" :messages="$errors->get('category')" />
            </div>

            <div>
                <x-input-label for="category_price" :value="__('Category Price')" />
                <x-text-input id="category_price" name="category_price" type="text" class="mt-1 block w-full" :value="old('category_price', '')"
                    required autofocus autocomplete="category_price" />
                <x-input-error class="mt-2" :messages="$errors->get('category_price')" />
            </div>

            <div>
                <x-input-label for="total_price" :value="__('Total Price')" />
                <x-text-input id="total_price" name="total_price" type="text" class="mt-1 block w-full" :value="old('total_price', '')"
                    required autofocus autocomplete="total_price" />
                <x-input-error class="mt-2" :messages="$errors->get('total_price')" />
            </div>
        
            <div>
                <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
