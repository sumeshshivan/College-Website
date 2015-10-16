<?php require_once("includes/config.php"); ?>
<?php require_once("includes/database.php"); ?>
<?php require_once("includes/news.php"); ?>
<?php require_once("includes/header.php"); ?>
		<div class="content-inner container contentcontainer">
			<div class="container container-full">
				<div class="row row-fix">

				<!-- ****** Include Navigation ******** -->
					<?php require_once("includes/navigation.php"); ?>

				<!-- ****** Main Content ******** -->
					<div class="col-md-6">
						<h2 class="content-sub-heading">Main Content</h2>

					</div>
				<!-- ****** end of Main Content ******** -->

				<!-- ****** Include News and Events ******** -->
					<?php require_once("includes/newsevents.php"); ?>
				</div>
			</div>
		</div>
	</div>

<?php require_once("includes/footer.php"); ?>