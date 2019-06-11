<section id="bottom">
	<div class="container-fluid">
		<div class="location col-lg-3 col-md-6 col-sm-6 col-xs-6">
			<h5 style="font-family: AlegreyBold; font-size: 20px;">Locations</h5>
			<ul>
				<?php
			$Query = "SELECT * FROM Branches ORDER BY Branch_Id ASC LIMIT 5";
			$Select_Branches = mysqli_query($connection, $Query);

			while($row = mysqli_fetch_assoc($Select_Branches)) {
				$Branch_Id = $row['Branch_Id'];
				$Branch_Name = $row['Branch_Name'];

				echo "<li>";
				echo "<a style='font-family: Alegrey; font-size: 18px;' href='#'> {$Branch_Name}</a>";
				echo "</li>";
				}
			?>
			</ul>
		</div>
		<div class="bottom-blog col-lg-3 col-md-6 col-sm-6 col-xs-6">
			<h5 style="font-family: AlegreyBold; font-size: 20px;">Blog</h5>
			<ul>
			<?php
			$Query = "SELECT * FROM Posts ORDER BY Post_Id DESC LIMIT 5";
			$Select_Posts = mysqli_query($connection, $Query);

			while($row = mysqli_fetch_assoc($Select_Posts)) {
				$Post_Id = $row['Post_Id'];
				$Post_Title = $row['Post_Title'];

				echo "<li>";
				echo "<a style='font-family: Alegrey; font-size: 18px;' href='#'> {$Post_Title}</a>";
				echo "</li>";
				}
			?>
			</ul>
		</div>
		<div class="bottom-even col-lg-3 col-md-6 col-sm-6 col-xs-6">
			<h5 style="font-family: AlegreyBold; font-size: 20px;">Sermon</h5>
			<ul>
			<?php
			$Query = "SELECT * FROM Sermons ORDER BY Serm_Id DESC LIMIT 5";
				$Select_Sermons = mysqli_query($connection, $Query);

				while($row = mysqli_fetch_assoc($Select_Sermons)) {
					$Sermon_Id = $row['Serm_Id'];
					$Sermon_Title = $row['Serm_Title'];

					echo "<li>";
					echo "<a style='font-family: Alegrey; font-size: 18px;' href='#'> {$Sermon_Title}</a>";
					echo "</li>";
					}
				?>
				</ul>
		</div>
		<div class="bottom-even col-lg-3 col-md-6 col-sm-6 col-xs-6">
			<h5 style="font-family: AlegreyBold; font-size: 20px;">Events</h5>
			<ul>
			<?php
				$Query = "SELECT * FROM Events ORDER BY Event_Id DESC";
				$All_Events = mysqli_query($connection, $Query);

				while ($row = mysqli_fetch_assoc($All_Events)) {
					$Id = $row['Event_Id'];
					$Title = $row['Event_Title'];


					echo "<li>";
					echo "<a style='font-family: Alegrey; font-size: 18px;' href='#'> {$Title}</a>";
					echo "</li>";
				}
			?>
		</ul>
		</div>
	</div>
</section>