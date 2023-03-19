<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, viewport-fit=cover"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@yield('title')</title>
        @include('layouts.styles')
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.header')

            @include('layouts.menu')

            <div class="page-wrapper">
                @include('layouts.page_header')
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">@yield('content')</div>
                        </div>
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>

        @include('layouts.scripts')
    </body>
</html>
