@include('layouts.header')
@include('layouts.navbar')

<div class="container">

    <div class="col-sm-3 col-md-2 sidebar">
        @include("partials.sidebar")
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @if ($__env->yieldContent('sidebar'))
            <div class="col-md-10 col-md-offset-2 main-top ">
                <div class="col-md-3">
                    @yield('sidebar')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
                </div>
                @else
                    <div class="col-md-10 col-md-offset-2 main-top">
                        @yield('content')
                    </div>
                @endif

            </div>
    </div>
</div>
@include('layouts.footer')