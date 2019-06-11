<!-- / ===============================================================
Company Name: Nikah Web Solutions
Company Email: nikahwebsolutions@hotmail.com
Company URL: https://nikahwebsolutions.com
Programmer: Nii Kobby Armah Aryeetey
Programmer URL: (Facebook)https:// nii.koby.aryeetey.armah@facebook.com
            Twitter : https:// twitter.com/Nikah_Solutions
================================================================ /-->

<!--/===============================================================
>>> TABLE OF CONTENTS:
===================================================================-
1.0 Head
2.0 Body
    2.1.0 Header
        2.1.1 Navigation
        2.1.2 Welcome
        2.1.3 Two Button
    2.2 Sermon Page
    2.3 Blog Page
    2.3 Conference Page
    2.3 About Page
    2.3 Weekly Activities Page
    2.3 Contact Page
4.0 Footer
================================================================/ -->
<?php include 'Admin/Core/init.php';?>
<?php include 'Admin/Core/Database/db_connect.php';?>
<!Doctype html>
<html lang="en">
<?php include 'include/head.php';?>

<body>
	<!-- Header & Navigation -->
	<?php include 'include/Header.php';?>
	<!-- Sermon section -->
	<?php include 'include/Sermon.php';?>
	<!-- Blog section-->
	<?php include 'include/Blog.php';?>
	<!-- Soul winning image sliders -->
	<?php include 'include/Jesuscamp.php';?>
	<!-- Conference & Event section -->
	<?php include 'include/Conference.php';?>
	<!-- The General Overseer -->
	<?php include 'include/Overseer.php';?>
	<!-- The Pastors Sect -->
	<?php /*include 'include/Pastors.php';*/?>
	<!--The weekly Activities Sect-->
	<?php /*include 'include/WeeklyActivities.php';*/?>
	<!-- Contact Sect -->
	<?php include 'include/Contact.php';?>
	<!-- Bottom Location-->
	<?php include 'include/Location.php';?>
	<!--Footer -->
	<?php include 'include/Footer.php';?>
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
					scrollTop: target.offset().top - 90
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
