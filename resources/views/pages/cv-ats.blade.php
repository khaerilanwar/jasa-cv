@extends('layouts.main')

@section('content')
    @include('partials.header-model', [
        'title' => 'CV ATS Profesional',
        'description' => "CV ATS kami dirancang agar mudah terbaca oleh sistem pelacakan pelamar (ATS) yang digunakan banyak
                                    perusahaan. Dengan format sederhana namun profesional, CV ini memastikan keterbacaan optimal, mengikuti
                                    standar ATS, dan mencakup layanan revisi hingga CV Anda siap lulus seleksi otomatis.",
    ])

    @include('partials.list-model', [
        'data' => $model,
    ])
@endsection
