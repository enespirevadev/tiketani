<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mx-auto w-3/5 overflow-hidden">
                        <h2>Orders</h2>
                        <canvas data-te-chart="bar" data-te-dataset-label="Orders"
                            data-te-labels="['Jan', 'Feb' , 'Mar' , 'Apr' , 'May' , 'Jun' , 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']"
                            data-te-dataset-data="[30, 70, 90, 130, 200, 400, 550, 890, 1400, 2550, 5244, 7500]">
                        </canvas>
                    </div>

                    <div class="mx-auto w-3/5 overflow-hidden">
                        <h2>Customers</h2>
                        <canvas data-te-chart="line" data-te-dataset-label="Traffic"
                            data-te-labels="['Jan', 'Feb' , 'Mar' , 'Apr' , 'May' , 'Jun' , 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']"
                            data-te-dataset-data="[30, 70, 90, 130, 200, 400, 550, 890, 1400, 2550, 5244, 7500]">
                        </canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
