@extends('layout')

@section('header')

<header class="page-header js-header">
    <div class="page-inner">
	
		<nav class="primary" role="navigation">
			<nav class="jerry" role='navigation'>
			  <ul>
			    <li><a href="#">Home</a></li>
			    <li><a href="#">About</a></li>
			    <li><a href="#">Work</a></li>
			    <li><a href="#">Contact</a></li>
			  </ul>
			</nav> 

			<div class="menu">
			  <div class="hamburger">
			  </div>
			</div>
		</nav>

	</div>
</header>

@stop

@section('content')

	<h1>Hello World!</h1>

@stop

@section('footer')

	<script>
		$(document).ready(function() {
		  $(".menu").click(function() {
		    $("body").toggleClass("open");
		  });
		});
	</script>

@stop