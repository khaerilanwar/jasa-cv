<section class="py-8 antialiased md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        @include('partials.select-sort')
        {{ $data->links() }}
        <div class="my-6 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4 place-items-center">
            @foreach ($data as $item)
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm max-w-sm">
                    <div class="w-full">
                        <img class="mx-auto h-full" src="{{ asset('storage/images/model-cv/gallery/' . $item->image) }}"
                            alt="" />
                    </div>
                    <div class="pt-6">
                        <div class="mb-3 flex items-center justify-between gap-4">
                            <span class="me-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                {{ $item->code_name }}
                            </span>

                            <div class="flex items-center justify-end gap-1">

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                    class="rounded-lg py-2 px-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                                    <span class="sr-only"> Add to Favorites </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                    </svg>
                                </button>
                                <span class="text-gray-500">{{ $item->favorite_number }} Suka</span>
                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4">

                            <button type="button"
                                class="inline-flex w-full items-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4  focus:ring-blue-300">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $data->links() }}
    </div>
</section>
