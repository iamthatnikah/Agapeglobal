<hr>
<section id="conference">
		<h1 align="center" >CONFERENCES &amp; EVENTS</h1>
	<h4 style="font-weight: 600; font-family: 'Alegreybold'; font-size: 25px;" align="center">Up Coming Events</h4>
	<div id="events" class="col-sm-12 col-xs-12" align="center">
		<?php
		$Query = "SELECT * FROM Events ORDER BY Event_Id DESC";
		$All_Events = mysqli_query($connection, $Query);

		while ($row = mysqli_fetch_assoc($All_Events)) {
			$Id = $row['Event_Id'];
			$Image = $row['Event_Image'];
			$Title = $row['Event_Title'];
			$Host = $row['Event_Host'];
			$Guest = $row['Event_Guest'];
			$DayStart = $row['Event_DayStart'];
			$DayEnd = $row['Event_DayEnd'];
			$TimeS = $row['Event_TimeStart'];
			$StartAfix = $row['Event_TimeStartAfix'];
			$TimeE = $row['Event_TimeEnd'];
			$EndAfix = $row['Event_TimeEndAfix'];
			$Venue = $row['Event_Venue'];


			echo "<div>";
			echo "<img class='img-responsive center'; src='Admin/Assets/Img/Events/{$Image}'>";
			echo "<hr>";
			echo "<p>Theme: <small style='font-size: 15px;'>{$Title}</small></p>";
			echo "<p>Host: <small style='font-size: 15px;'>{$Host}</small> - Guest: <small style='font-size: 15px;'>{$Guest}</small></p>";
			echo "<p>Venue: {$Venue}</p>";
			echo "<p>Days: {$DayStart} - {$DayEnd}</p>";
			echo "<p>Time: {$TimeS}{$StartAfix} - {$TimeE}{$EndAfix}</p>";
			echo "</div>";
		}
		?>
	</div>
</section>
<div class="clearfix"></div>