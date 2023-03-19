<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Dashboard - Tracer Study ITG
    </title>
    @include('layouts.styles')
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
</head>

<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        @yield('header')
        <div class="page-wrapper">
            <div class="page-header d-print-none">

            </div>
                @yield('content-header')
            

            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        @yield('content')
                    </div>
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
