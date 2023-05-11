<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Landing Page | {{ $title }}</title>
</head>

<body>
@include('components.navbar')

   @yield('content')

@include('components.footer')   
</body>

</html>