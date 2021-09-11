<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? '' }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                    <a href="{{ route('efee') }}" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> Home
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('keycloak') }}" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> Login/Register
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="tim-icons icon-single-02"></i> Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
