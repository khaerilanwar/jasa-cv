@extends('layouts.main')

@section('content')
    {{-- TESTIMONIAL RESUMER --}}
    <section class="border-b border-gray-100">
        <h1 class="text-center text-3xl text-gray-50 font-bold pt-7 pb-5">Jasa CV Online Terpercaya</h1>
        <p class="text-center text-gray-300 px-4">
            Berdiri pada tahun 2020, kami telah membantu ribuan pencari kerja mempersiapkan CV profesional dan kreatif yang
            efektif, sesuai dengan kebutuhan industri dan posisi impian mereka. Dengan fokus pada kualitas dan kepercayaan,
            jasa CV kami dirancang untuk memberikan kesan terbaik kepada calon pemberi kerja. Kami memahami bahwa setiap
            orang memiliki cerita unik untuk dibagikan, dan kami hadir untuk membantu Anda menyusunnya dalam format yang
            menarik, relevan, dan ATS-friendly.
        </p>
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 grid-cols-2 sm:grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl text-gray-50 font-bold">1.500+</dt>
                    <dd class="font-normal text-gray-300">Pelanggan Merasa Puas</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl text-gray-50 font-bold">1.000+</dt>
                    <dd class="font-normal text-gray-300">Pelanggan Dapat Panggilan Test</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl text-gray-50 font-bold">100+</dt>
                    <dd class="font-normal text-gray-300">Model CV ATS Profesional</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl text-gray-50 font-bold">100+</dt>
                    <dd class="font-normal text-gray-300">Model CV Kreatif Menarik</dd>
                </div>
            </dl>
        </div>
    </section>
    {{-- END TESTIMONIAL RESUMER --}}

    {{-- GALLERY MODEL CV ATS --}}
    <section class="px-4">
        <h2 class="text-center text-gray-50 text-2xl font-bold my-7">Ringkasan Model CV ATS</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($modelAts as $ats)
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/images/model-cv/gallery/' . $ats->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </section>
    {{-- END GALLERY MODEL CV ATS --}}

    {{-- GALLERY MODEL CV ATS --}}
    <section class="px-4">
        <h2 class="text-center text-gray-50 text-2xl font-bold my-7">Ringkasan Model CV Kreatif</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($modelCreative as $creative)
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ asset('storage/images/model-cv/gallery/' . $creative->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </section>
    {{-- END GALLERY MODEL CV ATS --}}
@endsection
