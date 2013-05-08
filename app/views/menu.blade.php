@section('menu')
<nav>
{{ Menu::handler('main')->add('/','home',null,['class' => 'menu']); 
}}
</nav>
@stop
