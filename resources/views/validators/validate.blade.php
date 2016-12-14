
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
@endif
@if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>

@endif
@if(Session::has('erreur'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('erreur') }}</p>
@endif