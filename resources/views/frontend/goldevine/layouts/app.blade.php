<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
<<<<<<< Updated upstream
    @include('frontend.goldevine.include.goldevineStyle')
=======
    @include('frontend.goldevine.include.style')
>>>>>>> Stashed changes
</head>
<body>
    <div id="wrapper">
        @include('frontend.include.header')
        @include('frontend.include.navbar')
        <div class="inner-content">
            @yield('content')
            @include('frontend.include.footer')
        </div>
<<<<<<< Updated upstream
        @include('frontend.goldevine.include.goldevineScript')
=======
        @include('frontend.goldevine.include.script')
>>>>>>> Stashed changes
    </div>
</body>

</html>
