<?php include 'Admin/Core/init.php';?>
<?php include 'Admin/Core/Database/db_connect.php';?>
<!Doctype html>
<html lang="en">
<?php include 'include/head.php';?>

<body>
	<header>
		<!-- Navigation -->
		<nav class="main-nav nav navbar-fixed-top">
			<div class="nav navbar-brand logo"><a href="#showcase"><img src="img/AGAPE.png" alt="Church Logo"></a></div>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				<span style="background-color: #000" class="icon-bar"></span>
				<span style="background-color: #000" class="icon-bar"></span>
				<span style="background-color: #000" class="icon-bar"></span>
			</button>
			<ul id="main-nav" class="nav navbar-nav collapse navbar-collapse">
				<li><a href="index.php#campaign" class="the-Jesus-Camp">Jesus Camp</a></li>
				<li><a href="index.php#showcase" class="fa fa-home fa-2x"></a></li>
				<li><a href="index.php#sermon" class="Nav-Sermon"> Sermon</a></li>
				<li><a href="index.php#events" class="Nav-Event">Events</a></li>
				<li><a href="index.php#about" class="Nav-About">About</a></li>
				<li><a href="index.php#contact" class="Nav-Contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	
	<!-- Locations -->
	<section style="margin-top: 150px;" class="container-fluid">
		<div id="main-blog" class="container">
			<?php
				$Query = "SELECT * FROM Posts ORDER BY Post_Id DESC LIMIT 25";
				$Select_Posts = mysqli_query($connection, $Query);

				while($row = mysqli_fetch_assoc($Select_Posts)) {
				$Post_Id = $row['Post_Id'];
				$Post_Content = $row['Post_Content'];
				$Post_Sub_Title = $row['Post_Sub_Title'];
				$Post_Title = $row['Post_Title'];
				$Post_By = $row['Post_By'];
				$Post_Author = $row['Post_Author'];
				$Post_Date = $row['Post_Date'];

				echo "<div>";
				echo "<h4 style='font-family: Alegreybold; font-size: 50px;'>{$Post_Title}<small> - {$Post_Sub_Title}</small></h4>";
				echo "<p style='font-family: Alegreybold; font-size: 15px;'><b>Author :</b> {$Post_Author}</p>";
				echo "<p >{$Post_Content}</p>";
				echo "<p style='font-family: Alegreybold; font-size: 15px;'><b>Uploaded by :</b> {$Post_By}</p>";
				echo "<p style='font-family: Alegreybold;'><b>Date:</b> {$Post_Date}</p>";
				echo "<a style='font-family: Alegreybold; margin-left: 10px;' href='Sermon.php?share={$Sermon_Id}'>Share</a>";
				echo "<a style='font-family: Alegreybold; margin-left: 10px;' href='Sermon.php?like={$Sermon_Id}'>Like</a>";
				echo "<a style='font-family: Alegreybold; margin-left: 10px;' href='Sermon.php?comment={$Sermon_Id}'>Comment</a>";
				echo "<hr>";
				echo "</div>";
				}
			?>
		</div>
		<div id="blog-aside">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 style="font-family: Alegreybold" class="panel-title">News</h4>
				</div>
				<div class="panel-body">
					<?php
						$Query = "SELECT * FROM Posts ORDER BY Post_Id DESC LIMIT 5";
						$Select_Posts = mysqli_query($connection, $Query);

					while($row = mysqli_fetch_assoc($Select_Posts)) {
						$Post_Id = $row['Post_Id'];
						$Post_Content = $row['Post_Content'];
						$Post_Sub_Title = $row['Post_Sub_Title'];
						$Post_Title = $row['Post_Title'];
						$Post_By = $row['Post_By'];
						$Post_Author = $row['Post_Author'];
						$Post_Date = $row['Post_Date'];

						echo "<div>";
						echo "<h4 style='font-family: Alegreybold; font-size: 20px;'><a href='#'>{$Post_Title}<small> - {$Post_Sub_Title}</small></a></h4>";
						echo "<hr>";
						echo "</div>";
						}
					?>
				</div>
			</div>
		</div>
		<div style="margin-top: 10px;" id="blog-aside">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 style="font-family: Alegreybold" class="panel-title">Recent Posts</h4>
				</div>
				<div class="panel-body">
					<?php
						$Query = "SELECT * FROM Posts ORDER BY Post_Id DESC LIMIT 5";
						$Select_Posts = mysqli_query($connection, $Query);

					while($row = mysqli_fetch_assoc($Select_Posts)) {
						$Post_Id = $row['Post_Id'];
						$Post_Sub_Title = $row['Post_Sub_Title'];
						$Post_Title = $row['Post_Title'];

						echo "<div>";
						echo "<h4 style='font-family: Alegreybold; font-size: 20px;'><a href='#'>{$Post_Title}<small> - {$Post_Sub_Title}</small></a></h4>";
						echo "<hr>";
						echo "</div>";
						}
					?>
				</div>
			</div>
		</div>
		<div style="margin-top: 10px;" id="blog-aside">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 style="font-family: Alegreybold" class="panel-title">Recent Sermon</h4>
				</div>
				<div class="panel-body">
					<?php
						$Query = "SELECT * FROM Sermons ORDER BY Serm_Id DESC LIMIT 5";
						$Select_Sermons = mysqli_query($connection, $Query);

							while($row = mysqli_fetch_assoc($Select_Sermons)) {
								$Sermon_Id = $row['Serm_Id'];
								$Sermon = $row['Serm'];
								$Sermon_Title = $row['Serm_Title'];

								echo "<div>";
								echo "<h4 style='font-family: Alegreybold; font-size: 20px;'><a href='#'>{$Sermon_Title}</a></h4>";
								echo "<hr>";
								echo "</div>";
								}
							?>
				</div>
			</div>
		</div>
</section>

<footer>
	<?php include 'include/Location.php';?>
	<?php include 'include/Footer.php';?>
</footer>
</body>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	// SCROLLING OF THE NAVBAR TO THE SECTIONS SMOOTHLY
		$('a[href^="#"]').on('click', function(event) {

			var target = $($(this).attr('href'));

			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top - 120
				}, 2000);
			}
			// NAVBAR BACKGROUND CHANGE WHEN CLICKS
		});
		$(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 60) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar-fixed-top").css("background-color", "#f8f8f8"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });

	</script>

</html>