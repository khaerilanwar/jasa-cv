@extends('layouts.main')

@section('content')
    @include('partials.header-model', [
        'title' => 'Testimoni',
        'description' =>
            'Testimoni berikut adalah cerita nyata dari mereka yang telah kami bantu dalam proses melamar pekerjaan. Melalui pengalaman mereka, Anda dapat melihat sendiri kualitas dan dampak dari layanan kami dalam meningkatkan peluang karier.',
    ])

    @include('partials.list-testimoni', ['testimoni' => $testimoni])
@endsection
