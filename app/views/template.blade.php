<!DOCTYPE html>
<head>
<title>Meu Muro</title>
<link href="{{{ asset('css/bootstrap.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/bootstrap-responsive.css') }}}" rel="stylesheet">
<link href="{{{ asset('slides/slides.css') }}}" rel="stylesheet">
<link href="{{{ asset('Font-Awesome/css/font-awesome.css') }}}" rel="stylesheet">

<script src="{{{ asset('js/jquery/jquery.js') }}} "></script>
<script src="{{{ asset('js/SlidesJS3/source/jquery.slides.min.js') }}} "></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
@section('menu')
<nav>
<div class="navbar">
<div class="navbar-inner">
{{ Menu::handler('main',['class'=>'nav'])
        ->add('/','home',null,['class' => 'menu'])
        ->add('/user/dashboard','Dashboard',null,['class' => 'menu'])
        ->add('/figura/create','Upload',null,['class' => 'menu'])
}}

<?php if (isset(Confide::user()->username)): ?>
{{
 Menu::handler('user',['class'=>'nav pull-right'])
				->add('user/profile',Confide::user()->username,null,['class' => 'menu','data-toggle' => 'menu' ])
				->add('user/logout','Sair '.Confide::user()->username,null,['class' => 'menu'])

}}
<?php else : ?>
{{ Menu::handler('login',['class'=>'nav pull-right'])
        ->add('user/login','Login',null,['class' => 'menu']) }}

<?php endif; ?>
</div>
</div>
</nav>
@show

<section class = "container-fluid" >

@yield('conteudo')
</div>
<footer>
<p>Meu Muro</p>
</footer>

</section>

</body>
