<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Material</title>

	<!-- css -->
	<link href="../css/base.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="avoid-fout">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-alt progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="header-logo" href="index.html">PEC ADMIN LOGIN</div>
		</div>
		
	</header>


	<div class="content" style="margin-top: 100px;">

		<div class="content-inner">
			<div class="container">


				<div class="row">
					<div class="col-lg-6 col-sm-8">

						<div class="card">
								<div class="card-main">
									<div class="card-inner" style="padding: 50px;">
										<p class="card-heading">Login</p>

										<form action="signin.php" method="POST">

											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-lg-6 col-sm-8">
														<label class="floating-label" for="float-text">Username</label>
														<input class="form-control" name="username" id="float-text" type="text">
													</div>
												</div>
											</div>

											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-lg-6 col-sm-8">
														<label class="floating-label" for="float-text">Password</label>
														<input class="form-control" name='password' id="float-text" type="password">
													</div>
												</div>
											</div>

											<div class="form-group-btn">
												<div class="row">
													<div class="col-lg-6 col-md-8 col-sm-10">
														<button class="btn btn-blue waves-button waves-light waves-effect" type="submit"  name="submit" value="Login" >Login</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>


					</div>
				</div>


			</div>
		</div>
	</div>



		<footer class="footer">
		<div class="container">
			<p>Material</p>
		</div>
	</footer>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/base.min.js"></script>
</body>
</html>