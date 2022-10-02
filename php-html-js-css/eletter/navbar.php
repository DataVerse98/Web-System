<!--<//?php
	include "conn.php";
?>-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
	<span class="navbar-brand">
		<img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		LGSystem
	</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown pr-5 ">
				<a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="homepage.php" >Home</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="login.php" >Log Out</a>
				</div>
			</li>
		</ul>
	</div>
</nav>