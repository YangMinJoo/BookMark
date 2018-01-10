@extends('layouts.master')

@section('content')
<body data-ng-app="app"
	  id="body"
	  data-custom-page
	  data-off-canvas-nav
	  data-ng-controller="AppCtrl"
	  >
	<!--[if lt IE 9]>
		<div class="lt-ie9-bg">
			<p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
			<p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		</div>
	<![endif]-->

	<section id="app-container">
		<section id="app"
				 class="app"
				 data-ng-class=" { 'layout-boxed': main.layout === 'boxed',
								   'nav-collapsed-min': main.isMenuCollapsed
		} ">

			<header data-ng-include=" {{elixir('app/layout/header.html')}} "
					 id="header"
					 class="header-container "
					 data-ng-class="{ 'header-fixed': main.fixedHeader,
									  'bg-light': ['11','12','13','14','15','16','21'].indexOf(main.skin) >= 0,
									  'bg-dark': main.skin === '31',
									  'bg-primary': ['22','32'].indexOf(main.skin) >= 0,
									  'bg-success': ['23','33'].indexOf(main.skin) >= 0,
									  'bg-info-alt': ['24','34'].indexOf(main.skin) >= 0,
									  'bg-warning': ['25','35'].indexOf(main.skin) >= 0,
									  'bg-danger': ['26','36'].indexOf(main.skin) >= 0
					 }"></header>

			<div class="main-container">
				<aside data-ng-include=" {{elixir('app/layout/sidebar.html')}} "
					   id="nav-container"
					   class="nav-container nav-vertical"
					   data-ng-class="{ 'nav-fixed': main.fixedSidebar,
										'bg-light': ['31','32','33','34','35','36'].indexOf(main.skin) >= 0,
										'bg-dark': ['31','32','33','34','35','36'].indexOf(main.skin) < 0
					   }">
				</aside>

				<section id="content"
						 class="content-container {main.pageTransition.class}"
						 data-ng-view
						 >
				</section>
			</div>

		</section>
	</section>

@endsection
