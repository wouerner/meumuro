<!DOCTYPE html>
<head>
<title>Meu Muro</title>
<link href="{{{ asset('css/bootstrap.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/bootstrap-responsive.css') }}}" rel="stylesheet">
<link href="{{{ asset('slides/slides.css') }}}" rel="stylesheet">
<link href="{{{ asset('Font-Awesome/css/font-awesome.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/style.css') }}}" rel="stylesheet">

<script src="{{{ asset('js/jquery/jquery.js') }}} "></script>
<script src="{{{ asset('js/SlidesJS3/source/jquery.slides.min.js') }}} "></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
@section('menu')
<nav>
<div class="navbar navbar-inverse">
<div class="navbar-inner">

<?php if (isset(Confide::user()->username)): ?>
{{ Menu::handler('main',['class'=>'nav '])
        ->add('/','<i class="icon-"></i>Principal',null,['class' => 'menu'])
        ->add('/user/dashboard','<i class="icon-dashboard"></i> Dashboard',null,['class' => 'menu'])
        ->add('/figura/create','<i class="icon-upload"></i>Upload',null,['class' => 'menu'])
        ->add('/categoria','<i class="icon-tags"></i>Categorias',null,['class' => 'menu'])
}}

{{
 Menu::handler('user',['class'=>'nav pull-right'])
				->add('user/profile','<i class="icon-user"></i>'.Confide::user()->username,null,['class' => 'menu','data-toggle' => 'menu' ])
				->add('user/logout','Sair '.Confide::user()->username,null,['class' => 'menu'])

}}
<?php else : ?>
{{ Menu::handler('main',['class'=>'nav'])
				->add('/','Principal',null,['class' => 'menu'])}}

{{ Menu::handler('login',['class'=>'nav pull-right'])
        ->add('user/login','<i class="icon-user"></i>Login',null,['class' => 'menu']) }}

<?php endif; ?>
</div>
</div>
</nav>
@show

<section class = "container-fluid" >

@yield('conteudo')
</div>
<footer>
<hr>
<p class = "text-center">Meu Muro - Wouerner.eti.br</p>
</footer>

</section>

</body>
