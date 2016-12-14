@include('layouts.navbar')

<div class="container-fluid">

    @include("validators.validate")

    <div class="col-md-3">
        @yield('sidebar')
        @include('partials.sidebar')
    </div>

    <div class="col-md-9">
        @yield('content')
    </div>

</div>

@include('layouts.footer')
