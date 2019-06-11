<section id="campaign" class="section">
	<div class="campaign" align="center">
		<h1>JESUS CAMPAIGN</h1>
		<p style="font-weight: 600; font-family: 'Alegreybold';">Soul Winning / Street Evengelism</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<div>
			<div id="moments" class="">
				<!-- <h5> JESUS</h5> -->
				<div class="Evangelism col-sm-12 col-xs-12">
					<?php
					$Query = "SELECT * FROM Evangelism ORDER BY Evan_Id DESC LIMIT 8";
						$Select_AllEvan = mysqli_query($connection, $Query);

						while($row = mysqli_fetch_assoc($Select_AllEvan)) {
							$Id = $row['Evan_Id'];
							$By = $row['Uploaded_By'];
							$Image = $row['Evan_Image'];
							$Date= $row['Date_Uploaded'];
							$Branch = $row['Evan_Branch'];


							echo "<div>";
							echo "<img style='width: 300px; height: 300px;' class='bounce img-responsive' src='Admin/Assets/img/Evangelism/{$Image}'>";
							echo "</div>";
							}
						?>
				</div>
					<a style="margin-top: 15px;" href="" class="btn btn-full">Lets talk about Jesus</a>
			</div>
		</div>
	</div>
</section>