<section id="sermon" class="container-fluid">
	<form action="" method="REQUEST">
		<div id="features" class="col-sm-12" align="center">
			<h1>THE SERMON</h1>
			<h4 style="font-weight: 600; font-family: 'Alegreybold';" align="center">Download Any of Our Sermon</h4>
			<div class="sermon-search">
				<input name="search" type="search" placeholder="Search"><button name="submit" type="submit" class="fa fa-search"></button>
			</div>
		</div>
	</form>
	<?php
		if(isset($_REQUEST['submit'])) {
			$search = $_REQUEST['search'];

			$query = "SELECT * FROM Sermons WHERE Serm_tags LIKE '%$search%' ";
			$query = "SELECT * FROM Sermons WHERE Serm_Title LIKE '%$search%' ";
			$query = "SELECT * FROM Categories WHERE Cat_Title LIKE '%$search%' ";
			$query_search = mysqli_query($connection, $query);

			if (!$query_search) {
				die("QUERY FAILED" . mysqli_error($connection) );
			}

			$count = mysqli_num_rows($query_search);

			if ($count == 0) {
				echo "<h4 style='text-align: center;'>NO RESULTS.</h4>";
			}/*header('Location: Index.php#sermon');*/
		}
	?>
	<div id="audios" class="container-fluid" align="center">
		<?php
		$Query = "SELECT * FROM Sermons ORDER BY Serm_Id DESC LIMIT 25";
		$Select_Sermons = mysqli_query($connection, $Query);

			while($row = mysqli_fetch_assoc($Select_Sermons)) {
				$Sermon_Id = $row['Serm_Id'];
				$Sermon = $row['Serm'];
				$Sermon_Title = $row['Serm_Title'];
				$Sermon_By = $row['Serm_By'];
				$Uploaded_By = $row['Uploaded_By'];
				$Date_Uploaded = $row['Serm_Date'];
				$Sermon_Branch = $row['Serm_Branch'];
				$Sermon_Tag = $row['Serm_Tag'];


				echo "<div>";
				echo "<audio controls src='Admin/Assets/Sermon/{$Sermon}'></audio>";
				echo "<p><b>Title :</b> {$Sermon_Title}</p>";
				echo "<p><b>Sermon by :</b> {$Sermon_By}</p>";
				echo "<p><b>Uploaded by :</b> {$Uploaded_By}</p>";
				echo "<p><b>Branch :</b> {$Sermon_Branch}</p>";
				echo "<p><b>Date Uploaded :</b>{$Date_Uploaded}</p>";
				echo "<a href='{$Sermon}.zip'><i class='fa fa-download'></i> Download</a>";
				echo "<a href='Sermon.php?share={$Sermon_Id}'><i class='fa fa-share'></i> Share</a>";
				echo "<a href='Sermon.php?like={$Sermon_Id}'><i class='fa fa-thumbs-up'></i> Like</a>";
				echo "</div>";
				}
			?>
	</div>
</section>