<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="height=device-height, width=420, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GameFuel - Игровой портал</title>
	<script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>
	<script src="https://yastatic.net/share2/share.js" async="async"></script>
	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempus dominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Select 2 -->
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Date-range picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pushy.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<!-- Затемнение -->
	<div class="site-overlay"></div>

	<!-- Меню сайта -->
	<nav>
		<div class="topmenu">
			<div id="wrapper">
				<div class="topmenu_wrapper">
					<div class="topmenu_wrapper_nav">
			 			<button class="menu-btn"></button>
						<a href="{{ route('index') }}"></a>
					</div>
			
					<form class="topmenu_wrapper_search">
						<input type="search" name="search" placeholder="Поиск информации ..." autocomplete="off"> 
						<input type="submit" value="">
					</form>
			
					<div class="topmenu_wrapper_userPanel">
						@auth
							<a href="#"><img src="{{ asset('/img/icon/icon_add.svg') }}" alt="{add}"></a>
							<a href="#"><img src="{{ asset('/img/icon/icon_notification.svg') }}" alt="{notification}"></a>
							<a href="{{ route('profile.index') }}"><img src="{{ asset('/img/users/user_profile_empty.jpg') }}" alt="{profile}"></a>
						@endauth
						@guest
							<a href="{{ route('login') }}" id="auth">
								<i class="fas fa-sign-in-alt"></i>
								<span class="ml-3">Авторизация</span>
							</a>
							<div></div>
						@endguest
					</div>
				</div>
			</div>
		</div>

		<div class="submenu">
			<div class="submenu_wrapper">
				<ul class="submenu_wrapper_submenu">
					<li>
            <a href="#">
              <img src="{{ asset('/img/icon/icon_home.svg') }}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <span>menu</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>menu</span>
            </a>
          </li>
				</ul>
			</div>
		</div>
	</nav>

  @yield('content')

  <footer>
		<div class="footerElement">
			<div class="footerElement_element"></div>
			<div id="wrapper">
				<ul class="footerElement_wrapper">
					<li class="footerElement_wrapper_logo">
						<a href="#"></a>
					</li>
					<li>
						<h3><a href="#">Новости</a></h3>
						<p><a href="#">Анонсы</a></p>
						<p><a href="#">События</a></p>
						<p><a href="#">Обсуждения</a></p>
					</li>
					<li>
						<h3><a href="#">Игры</a></h3>
						<p><a href="#">RPG</a></p>
						<p><a href="#">Экшены</a></p>
						<p><a href="#">Квесты</a></p>
					</li>
					<li>
						<h3><a href="#">Подборки</a></h3>
						<p><a href="#">Топы</a></p>
						<p><a href="#">Новинки</a></p>
						<p><a href="#">Рекомендации</a></p>
					</li>
					<li>
						<h3><a href="#">Первый взгляд</a></h3>
						<p><a href="#">Новинки</a></p>
						<p><a href="#">Ретро-смотр</a></p>
						<p><a href="#">Обсуждения</a></p>
					</li>
					<li>
						<h3><a href="#">Полезное</a></h3>
						<p><a href="#">Гайды</a></p>
						<p><a href="#">Моды</a></p>
						<p><a href="#">Дополнения</a></p>
					</li>
				</ul>
				<div class="footerElement_wrapper">
					<hr>
				</div>
				<div class="footerElement_wrapper">
					<div class="footerElement_wrapper_links">
						<a href="#">О портале</a>
						<a href="#">Политика конфиденциальности</a>
						<a href="#">Вакансии</a>
						<a href="#">Обратная связь</a>
					</div>
					<div class="footerElement_wrapper_social">
						<a href="#"><img src="{{ asset('/img/image/elements/test_counter.png') }}" alt="{optional}"></a>
						<a href="#"><img src="{{ asset('/img/icon/social/icon_vk.svg') }}" alt="{optional}"></a>
						<a href="#"><img src="{{ asset('/img/icon/social/icon_inst.svg') }}" alt="{optional}"></a>
						<a href="#"><img src="{{ asset('/img/icon/social/icon_facebook.svg') }}" alt="{optional}"></a>
					</div>
				</div>
			</div>
			<div class="footerElement_white">
				<div id="wrapper">
					<div class="footerElement_white_wrapper">
							<p>© GameFuel - Игровой портал. 2022</p>
							<p>При цитировании ссылка на www.site.ru обязательна</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/pushy.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
  $(function () {
    bsCustomFileInput.init();
  });
  $('.select2').select2()
</script>
<style>
  .custom-file-input:lang(en)~.custom-file-label::after {
    content: '...';
  }
</style>

</body>

</html>