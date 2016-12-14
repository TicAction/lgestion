<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>{{Auth::guard('admins')->user()->name}}</strong> <small>Gestion de classe</small></a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url("/admin")}}">Accueil</a></li>
                <li><a href="{{url("admin/enfant")}}">Profil</a></li>
                <li><a href="{{url("admin/logout")}}">Déconnexion</a></li>
            </ul>

        </div>
    </div>
</nav>