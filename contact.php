<?php include("includes/header.php") ?>


<div id="contact" class="text-center">
	<div class="container">
		<div class="section-title center">
			<h2>Contact</h2>
			<hr>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
				<p> 5001 Washington st Ave, <br>
					Newark, NJ-07102</p>
			</div>
			<div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
				<p>abc.xyz@gmail.com</p>
			</div>
			<div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
				<p> +1 111 111 1111</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<h3>Leave me a message</h3>
			<form name="sentMessage" id="contactForm" novalidate>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" id="name" class="form-control" placeholder="Name" required="required">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" id="email" class="form-control" placeholder="Email" required="required">
							<p class="help-block text-danger"></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
					<p class="help-block text-danger"></p>
				</div>
				<div id="success"></div>
				<button type="submit" class="btn btn-default">Send Message</button>
			</form>
			<div class="container">
				<ul>
					<a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-github fa-2x"></i></a>
					<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
				</ul>
			</div>
		</div>
	</div>
</div>
<ul class="pager font_style">
	<li><a href="courses.php">Previous</a></li>
</ul>

<?php include("includes/footer.php") ?>
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script> 
</body>
</html>