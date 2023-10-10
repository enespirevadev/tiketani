<div class="grid-cols-1 sm:grid md:grid-cols-3 ">
    @foreach ($events as $event)
        <div
            class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
            <a href="#!">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1589487391730-58f20eb2c308?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2674&q=80"
                    style="width: 100%; max-height: 200px;" />
            </a>
            <div class="p-6">
                <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                    {{ $event->name }}
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                <div scope="col" class="px-6 py-4">{{ $teams[$event->teamA_id] }} vs. {{ $teams[$event->teamB_id] }}
                </div>
                <div scope="col" class="px-6 py-4">Venue: {{ $venues[$event->venue_id] }}</div>
                <div scope="col" class="px-6 py-4">Tournament: {{ $tournaments[$event->tournament_id] }}</div>
                <div scope="col" class="px-6 py-4">Date: {{ $event->start }}</div>
                </p>

                <button type="button"
                    class="inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] transition duration-150 ease-in-out hover:bg-neutral-800 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-neutral-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] dark:bg-neutral-900 dark:shadow-[0_4px_9px_-4px_#030202] dark:hover:bg-neutral-900 dark:hover:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:focus:bg-neutral-900 dark:focus:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:active:bg-neutral-900 dark:active:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)]"
                    data-te-toggle="modal" data-te-target="#buyModal">
                    Buy Tickets
                </button>
            </div>
        </div>
    @endforeach
</div>


@include('home.buy')
