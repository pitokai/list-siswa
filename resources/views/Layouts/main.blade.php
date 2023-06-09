<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Website Untuk Data Siswa">

    <link rel="shortcut icon" href={{ asset('assets/baslogoo.png') }} type="image/x-icon">

    <title>@yield('title') | Pages</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('partials.navbar')


    <div class="min-h-screen pt-24 px-10">
        @yield('container')
    </div>

    <div>
        @include('partials.footer')
    </div>

    @include('partials.script')
</body>

</html>
