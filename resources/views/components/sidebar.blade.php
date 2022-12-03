<ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="lateral">
    <li class="nav-item">
        <a class="nav-link {{ request ()-> routeIs ('dashboard') ? 'active' : '' }}" aria-current="page" href="{{route('dashboard')}}"><i class="fa-solid fa-house"></i>Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request ()-> routeIs ('admin.notice') ? 'active' : '' }}" aria-current="page" href="{{route('admin.notice')}}"><i class="fa-solid fa-triangle-exclamation"></i> Publicar notícia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request ()-> routeIs ('admin.gallery') ? 'active' : '' }}" href="{{route('admin.gallery')}}"><i class="fa-solid fa-image"></i> Publicar na galeria</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request ()-> routeIs ('admin.artist') ? 'active' : '' }}" href="{{route('admin.artist')}}"><i class="fa-solid fa-palette"></i> Publicar artista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request ()-> routeIs ('admin.project') ? 'active' : '' }}" href="{{route('admin.project')}}"><i class="fa-solid fa-tarp"></i> Projetos pendentes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</a>
    </li>
    <li class="nav-item dropdown">
    </li>
</ul>