<header>
    <h1>Cursos baratos</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active': ''}}">Home</a></li>
            {{--@dump(request()->routeIs('home'))--}}
            <li><a href="{{route('cursos.index')}}"class="{{request()->routeIs('cursos.*') ? 'active': ''}}">Cursos</a></li>
            {{--@dump(request()->routeIs('cursos.index'))--}}
            <li><a href="{{route('nosotros')}}"class="{{request()->routeIs('nosotros') ? 'active': ''}}">Nosotros</a></li>
            {{--dump(request()->routeIs('nosotros') )--}}
        </ul>
    </nav>
</header>
