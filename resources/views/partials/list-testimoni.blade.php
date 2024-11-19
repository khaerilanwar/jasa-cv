@php
    use Carbon\Carbon;
@endphp

<section class="py-6 px-4">

    @include('partials.input-review')

    <div class="mx-auto flex justify-center py-6">
        <div class="flex items-center">
            <svg class="w-5 h-5 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ms-2  font-bold text-gray-200">{{ $avgTestimoni }}</p>
            <span class="w-1 h-1 mx-1.5 bg-gray-400 rounded-full"></span>
            <span class=" font-medium text-gray-200">Total {{ $totalTestimoni }}
                ulasan</span>
        </div>

    </div>

    @foreach ($testimoni as $index => $testi)
        @if ($loop->odd)
            <div class="flex items-start gap-2.5 mb-4">
                <img class="w-8 h-8 rounded-full" src="{{ Avatar::create($testi->customer_name)->toBase64() }}"
                    alt="Jese image">
                <div
                    class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <span
                            class="text-sm font-semibold text-gray-900">{{ Str::limit($testi->customer_name, 20, '...') }}</span>
                        <span
                            class="text-sm font-normal text-gray-500">{{ Carbon::parse($testi->created_at)->isoFormat('DD MMM G') }}</span>
                    </div>
                    <p class="text-sm font-normal py-2.5 text-gray-900">{{ $testi->comment }}</p>

                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $testi->rating)
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            @endif
                        @endfor

                        <p class="ms-1 text-sm text-gray-500">{{ $testi->rating }}</p>
                        <p class="ms-1 text-sm text-gray-500">dari</p>
                        <p class="ms-1 text-sm text-gray-500">5</p>
                    </div>

                </div>
            </div>
        @else
            <div class="flex items-start justify-end gap-2.5 mb-4">
                <div class="flex flex-row-reverse items-start gap-2.5">
                    <img class="w-8 h-8 rounded-full" src="{{ Avatar::create($testi->customer_name)->toBase64() }}"
                        alt="Jese image">
                    <div
                        class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-s-xl rounded-br-xl">
                        <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                            <span
                                class="text-sm font-semibold text-gray-900">{{ Str::limit($testi->customer_name, 20, '...') }}</span>
                            <span
                                class="text-sm font-normal text-gray-500">{{ Carbon::parse($testi->created_at)->isoFormat('DD MMM G') }}</span>
                        </div>
                        <p class="text-sm font-normal py-2.5 text-gray-900">{{ $testi->comment }}</p>

                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $testi->rating)
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                @else
                                    <svg class="w-4 h-4 text-gray-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                @endif
                            @endfor
                            <p class="ms-1 text-sm text-gray-500">{{ $testi->rating }}</p>
                            <p class="ms-1 text-sm text-gray-500">dari</p>
                            <p class="ms-1 text-sm text-gray-500">5</p>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{ $testimoni->links() }}
</section>
