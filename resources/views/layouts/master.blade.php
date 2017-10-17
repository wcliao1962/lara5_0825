<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')|Title</title>
</head>
<body>
    @include('layouts.partials.navigation')
    <div class="container-fluid">
        @yield('content')
    </div>

</body>
</html>