<section id="contact">
	<div id="main-contact" class="container-fluid">
		<div align="center" style="margin-bottom: 30px">
			<h1>CONTACT</h1>
			<p style="font-size: 25px; font-family: 'Alegrey'; font-weight: 900;">Please do well to join us in any of <br>our branches any time.</p>
		</div>
		<div class="address-details col-md-6 col-sm-6 col-xs-12">
			<div class="col-lg-5 col-xs-12">
				<label style="font-size: 20px; font-family: 'AlegreyBold';"><span class="fa fa-map-marker" style="margin-right: 10px; color: #087220"></span> Address</label>
				<address style="font-size: 18px; font-family: 'Alegrey'; margin-left: 20px; font-family: 'Alegrey'; font-weight: 600;" class="address">Teshie Bush-road street, <br> Block 50 near Rasta <br> P.O.Box 482 OS <br> Accra - Ghana</address>
			</div>
			<div class="col-lg-7 col-xs-12">
				<label style="font-size: 18px; font-family: 'AlegreyBold';"><span class="fa fa-phone" style="margin-right: 10px; color: #087220"></span> Phone</label>
				<p style="font-size: 18px; font-family: 'Alegrey'; font-weight: 600;">+233 (0) 24-465-7112 / (0) 24-465-7112</p>
				<p style="font-size: 18px; font-family: 'Alegrey'; font-weight: 600;">+233 (0) 24-465-7112 / (0) 24-465-7112</p>
				<p style="font-size: 18px; font-family: 'Alegrey'; font-weight: 600;">+233 (0) 24-465-7112 / (0) 24-465-7112</p>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-5 col-sm-5 col-xs-12">
				<label style="font-size: 18px; font-family: 'AlegreyBold';"><span class="fa fa-globe"  style="margin-right: 10px; color: #087220"></span> Follow Us</label>
				<ul class="social-icons" style="margin-left: 20px;">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-facebook"></a>
				</ul>
			</div>
			<div class="col-lg-7 col-sm-6 col-xs-12">
				<label style="font-size: 18px; font-family: 'AlegreyBold';"><span class="fa fa-envelope" style="margin-right: 10px; color: #087220"></span> Email</label>
				<div>
					<a style="font-size: 18px; font-family: 'Alegrey'; margin-left: 20px; font-family: 'Alegrey'; font-weight: 600;" href="#">info@agapeglobalinternational.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<?php
				if (isset($_POST['Submit'])){


					$FullName = $_POST['FullName'];
					$EmailAddress = $_POST['EmailAddress'];
					$Comments = $_POST['Message'];
						
					$query = "INSERT INTO Visiters (Visiter_Id,Visiter_FullName,Visiter_EmailAddress,Visiter_Comment)";
					$query .= "VALUES (NULL,'$FullName','$EmailAddress','$Comments')";
					
					$result = mysqli_query($connection, $query);
					echo "<p style='font-family:'Alegrey'; text-align: center;'>Comment Successfully Sent. Thank you very much.</p>";
					header('Location: index.php#contact');

					if (!$result) {
						die('QUERY FAILED' . mysqli_error($connection));
					}
				}
				?>
			<form class="contact-form" action="" method="POST">
				<div class="col-md-6">
					<div class="form-group">
						<label style="font-size: 18px; font-family: 'AlegreyBold';">Full Name</label>
						<input style="font-size: 18px; font-family: 'Alegrey'; font-family: 'Alegrey'; font-weight: 800;" type="text" name="FullName" class="form-control" id="name" placeholder="Full Name" data-rule="name" data-msg="Please enter your fullname" required/>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label style="font-size: 18px; font-family: 'AlegreyBold';">Email Address</label>
						<input style="font-size: 18px; font-family: 'Alegrey'; font-family: 'Alegrey'; font-weight: 800;" type="email" name="EmailAddress" class="form-control" id="name" placeholder="Nikahwebsolutions@hotmail.com" data-rule="email" data-msg="Please Enter a Valid Email" required/>
						<div class="validation"></div>
					</div>
				</div>
				<div class="comment-box" style="margin: 0px 15px;">
					<label style="font-size: 18px; font-family: 'AlegreyBold';">Your Comments</label>
					<textarea style="font-size: 18px; font-family: 'Alegrey'; font-family: 'Alegrey'; font-weight: 800;" class="form-control" name="Message" rows="5" cols="25" placeholder="Please Place Your Comments In Here" min="30" max="255" required></textarea>
				</div>
				<br/>
				<div>
					<button type="submit" class="btn btn-half" style="margin-left: 20px;" name="Submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</section>