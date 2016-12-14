@include('layouts.navbar')

<div class="container-fluid">
    <div class="col-md-3">
        @yield('sidebar')
    </div>

    @include("validators.validate")

    <div class="col-md-8">

        @yield('content')

    </div>

</div>

@include('layouts.footer')