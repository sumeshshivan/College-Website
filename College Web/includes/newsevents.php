<!--**************** NEWS AND EVENTS SECTION ******************-->
					
					<?php 

						$newsItems = News::find_all();


					?>

					<div class="col-md-3 content-fix">
						<div class="content-fix-scroll" style="width: 337px;">
							<div class="content-fix-wrap">
								<div class="content-fix-inner" style="width: 305px;">
									<h2 class="content-sub-heading">NEWS AND EVENTS</h2>
									<ul>

										<?php   
											foreach( $newsItems as $news)
          									{
          										echo '<li><a href="'. $news->url . '">' . $news->title . '</a></li>';
          									}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
<!--**************** END OF NEWS AND EVENTS SECTION ******************-->