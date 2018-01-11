@extends('layouts.master')

@section('content')
<header class="content__title">
	<h1>Dashboard</h1>
	<small>Welcome to the unique CherryPie web app experience!</small>

	<div class="actions">
			<a href="" class="actions__item zmdi zmdi-trending-up"></a>
			<a href="" class="actions__item zmdi zmdi-check-all"></a>

			<div class="dropdown actions__item">
				<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="" class="dropdown-item">Refresh</a>
					<a href="" class="dropdown-item">Manage Widgets</a>
					<a href="" class="dropdown-item">Settings</a>
				</div>
			</div>
		</div>
</header>

<div class="row quick-stats">
	<h1> h i : D This is main page</h1>
</div>

<footer class="footer hidden-xs-down">
	<p>©Cherrypie BookMark. All rights reserved.</p>

	<ul class="nav footer__nav">
		<a class="nav-link" href="">Contacts</a>
	</ul>
</footer>
@endsection
