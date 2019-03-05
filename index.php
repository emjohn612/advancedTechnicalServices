<?php 
  define("TITLE", "Home | Advanced Technical Services");
  include('includes/header.php');
?>
<div id="about" class="container">
	<div class="row">
		<div class="col-sm-8">
			<h2>About</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
				est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
				enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-sm-4 text-center iconBox">
			<i class="far fa-handshake"></i>
		</div>
	</div>
</div>

<div class="container">
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/img1.jpeg" class="d-block w-100" alt="sample img 1">
			<div class="carousel-caption d-none d-md-block">
			<h5>...</h5>
			<p>...</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/img2.jpeg" class="d-block w-100" alt="sample img 2">
			<div class="carousel-caption d-none d-md-block">
			<h5>...</h5>
			<p>...</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/img3.jpeg" class="d-block w-100" alt="sample img 3">
			<div class="carousel-caption d-none d-md-block">
			<h5>...</h5>
			<p>...</p>
			</div>
		</div>
		</div>
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<?php 
	include('includes/footer.php');
?>