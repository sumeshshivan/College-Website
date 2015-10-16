<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/database.php"); ?>
<?php require_once("../includes/user.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php
  if(!$session->is_logged_in()) {
    redirect_to("login.php");
  } 
?>

<?php require_once("includes/header.php"); ?>
<?php require_once("includes/navigation.php"); ?>
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
						<h1 class="heading">Material</h1>
					</div>
				</div>
			</div>
		</div>


		<div class="content-inner">
			<div class="container">


				<div class="row">
					<div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
						<p>Material is an HTML5 UI design based on Google Material.</p>
						<blockquote>
							<p>A visual language for our users that synthesizes the classic principles of good design with the innovation and possibility of technology and science. This is material design.</p>
							<p><a class="text-break" href="http://www.google.com/design/spec/material-design/introduction.html">http://www.google.com/design/spec/material-design/introduction.html</a></p>
						</blockquote>
						<p>Have a play with a <a href="http://daemonite.github.io/material/">working prototype of Material</a>, let us know what you think at the <a href="http://labs.daemon.com.au">Daemon Labs</a> forum.</p>
						<h2 class="content-sub-heading">Components</h2>
						<div class="tile-wrap tile-wrap-animation">
							<a class="tile" href="ui-card.html">
								<div class="tile-inner">
									<span>Cards</span>
								</div>
							</a>
							<a class="tile" href="ui-collapse.html">
								<div class="tile-inner">
									<span>Collapsible Regions</span>
								</div>
							</a>
							<a class="tile" href="ui-dropdown.html">
								<div class="tile-inner">
									<span>Dropdowns</span>
								</div>
							</a>
							<a class="tile" href="ui-modal.html">
								<div class="tile-inner">
									<span>Modal &amp; Toasts</span>
								</div>
							</a>
							<a class="tile" href="ui-nav.html">
								<div class="tile-inner">
									<span>Navs</span>
								</div>
							</a>
							<a class="tile" href="ui-progress.html">
								<div class="tile-inner">
									<span>Progress Bars</span>
								</div>
							</a>
							<a class="tile" href="ui-tab.html">
								<div class="tile-inner">
									<span>Tabs</span>
								</div>
							</a>
							<a class="tile" href="ui-tile.html">
								<div class="tile-inner">
									<span>Tiles</span>
								</div>
							</a>
						</div>
						<h2 class="content-sub-heading">Elements</h2>
						<div class="tile-wrap tile-wrap-animation">
							<a class="tile" href="ui-button.html">
								<div class="tile-inner">
									<span>Button</span>
								</div>
							</a>
							<a class="tile" href="ui-form.html">
								<div class="tile-inner">
									<span>Form Elements <small>(basic)</small></span>
								</div>
							</a>
							<a class="tile" href="ui-form-adv.html">
								<div class="tile-inner">
									<span>Form Elements <small>(materialised)</small></span>
								</div>
							</a>
							<a class="tile" href="ui-icon.html">
								<div class="tile-inner">
									<span>Icons</span>
								</div>
							</a>
							<a class="tile" href="ui-table.html">
								<div class="tile-inner">
									<span>Tables</span>
								</div>
							</a>
						</div>
						<h2 class="content-sub-heading">Sample Pages</h2>
						<div class="tile-wrap tile-wrap-animation">
							<a class="tile" href="page-404.html">
								<div class="tile-inner">
									<span>404 Error Page</span>
								</div>
							</a>
							<a class="tile" href="page-500.html">
								<div class="tile-inner">
									<span>500 Error Page</span>
								</div>
							</a>
							<a class="tile" href="page-affix.html">
								<div class="tile-inner">
									<span>Full-Width Page <small>(with fixed LHC/RHC)</small></span>
								</div>
							</a>
							<a class="tile" href="page-login.html">
								<div class="tile-inner">
									<span>Login Page</span>
								</div>
							</a>
							<a class="tile" href="page-palette.html">
								<div class="tile-inner">
									<span>Page Palettes</span>
								</div>
							</a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>


<?php require_once("includes/footer.php"); ?>
