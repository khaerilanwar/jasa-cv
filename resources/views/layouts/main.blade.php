<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa CV Online</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (Request::is('testimoni'))
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    </script>
</head>

<body class="bg-gray-700 pb-24">

    @include('partials.button-scroll')

    @include('partials.bottom-nav')

    @yield('content')

    @session('error')
        <script>
            Toast.fire({
                icon: "error",
                title: @json($value)
            });
        </script>
    @endsession

    @session('success')
        <script>
            Toast.fire({
                icon: "success",
                title: @json($value)
            });
        </script>
    @endsession

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
