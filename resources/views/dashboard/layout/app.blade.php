<!DOCTYPE html>
<html lang="en">

@include('dashboard.layout.header')

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    {{-- sidebar section --}}
    @include('dashboard.layout.sidebar')

    {{-- Start dashboard main content section --}}
    <main class="main-content position-relative border-radius-lg">

        @include('dashboard.layout.navbar')

        {{-- container --}}
        <div class="container-fluid py-4">
            {{-- content section --}}
            @include('dashboard.contents.cards')
            @include('dashboard.contents.sale-graph')

            @yield('data_response')

            @include('dashboard.layout.footer')
        </div>

    </main>

    @include('dashboard.layout.settings')
    {{-- java script section --}}
    @include('dashboard.layout.main-js')
</body>

</html>
