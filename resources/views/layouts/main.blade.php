<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Wikrama Bogor | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/logowikrama.png" type="image/x-icon">
</head>
<body>
    @include('partials.navbar')
    <div class="master-bagian halaman">
        <h1>{{ $title }}</h1>
        <h2>SMK Wikrama Bogor</h2>
    </div>
    @yield('content')
    @include('partials.footer')
</body>
</html>