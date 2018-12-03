<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{asset('/css/app.css') }}>

        {{-- Title --}}
        <title>Daniel Pace - Resume</title>
    </head>
    <body>
        <div class="container-main">
            {{-- Get header --}}
            @yield('header')

            {{-- Main Content --}}
            <section class="row">     
                {{-- Get main column --}}
                <main class="col-md order-md-12 main">
                    @yield('main')
                </main>
                {{-- Get Side Column --}}
                <section class="col-md-4 side">
                    @yield('side')
                </section>
            </section>
            
            {{-- footer --}}
            <footer class="container container-footer">
                <span class=" d-print-none">©Daniel Pace 2018</span>
            </footer>
        </div>
        {{-- Main Content --}}
        @yield('content')

        {{-- Import Scripts --}}
        <script src={{asset('/js/app.js')}}></script>
    </body>
</html>