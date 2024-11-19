@extends('layouts.main')

@section('content')
    @include('partials.header-model', [
        'title' => 'CV Kreatif',
        'description' => "CV kreatif dirancang untuk Anda yang bekerja di industri kreatif dan ingin memberikan kesan pertama yang
                            kuat. Dengan desain unik dan estetika profesional, CV ini cocok bagi mereka yang ingin menonjol dan
                            menunjukkan kepribadian dalam setiap detail.",
    ])

    @include('partials.list-model', [
        'data' => $model,
    ])
@endsection
