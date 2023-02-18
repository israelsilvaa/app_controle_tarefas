site da aplicação

@Auth
    <h4>ola {{Auth::user()->name}}</h4>
@endauth

@guest
    <p>Olá visitante :)</p>
@endguest