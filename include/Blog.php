<hr>
<section id="blog" class="section well">
	<div id="our-blog" style=" padding-bottom: 25px;">
		<div class="container-fluid">
			<div class="col-lg-12" align="center">
				<h1>AGAPE COLLECTIONS</h1>
				<h4 style="font-weight: 600; font-family: 'Alegreybold'; font-size: 25px;" align="center">Our Blog</h4>
				<div method="get">
					<p style="font: 25px 'Alegrey';">Stories, thoughts and Articles about <br> what Jesus is doing in <br> our lives.</p>
				</div>
				<div class="button-all">
					<a class="btn btn-half" href="blog.php">READ MORE</a>
				</div>
			</div>
			<!-- <div class="col-lg-6">
				<h1>NEWS</h1>
				<h4 style="font-weight: 600; font-family: 'Alegreybold'; font-size: 25px;">Agape News</h4>
				<?php
					$query = "SELECT * FROM news";
					$All_News = mysqli_query($connection,$query);

					while($row = mysqli_fetch_assoc($All_News)) {
						$Id = $row['news_id'];
						$Branch = $row['news_branch'];
						$Content = $row['news_content'];

						echo "<h4 style='padding-left:0px; text-align:left; font: 25px Alegreybold;'>{$Content}<small>{$Branch}</small></h4>";
					}
						
					?>
			</div> -->
		</div>
	</div>
</section>
<hr>