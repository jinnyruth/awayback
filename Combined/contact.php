<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       
        <title>A Way Back Counseling</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
       <link href="css/styles.css" rel="stylesheet" />
       <link rel="icon" type="image/x-icon" href="favicon.ico">
       
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/e8ea6126e1.js" crossorigin="anonymous"></script>
      
    </head>
    <body>
	<?php
		$nameErr = $emailErr = $contBackErr = "";
		$name = $email = $contBack = $comment = "";
		$formErr = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["name"])) {
				$nameErr = "Name is required.";
				$formErr = true;
			} else {
				$name = cleanInput($_POST["name"]);
				//Use REGEX to accept only letters and white spaces
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and standard spaces allowed.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
				$formErr = true;
			} else {
				$email = cleanInput($_POST["email"]);
				// Check if e-mail address is formatted correctly
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Please enter a valid email address.";
					$formErr = true;
				}
			}
			$comment = cleanInput($_POST["comments"]);
		}

		function cleanInput($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

        <header>
            <div id="siteTitle" class="col-xl-9 col-log-10 mx-auto  d-flex justify-content-center d-md-none">
            <h1 class="site-heading text-center d-none d-lg-block text-uppercase">
                <span class="logo-left">
                    <img src="assets/img/compass.png" class="logo">
                </span><span class="siteName-right">
                    <span class="site-heading-upper text-primary">A Way Back </span>
                    <span class="site-heading-lower">Counseling</span>
            </span>
            </h1>
        </div>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-md navbar-light py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand  fw-bold d-lg-none" href="index.html"><img src="assets/img/compass.png"
                        width="40px"> A Way Back Counseling</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        
                        <li class="nav-item px-lg-4"><a class="nav-link" href="about.html">ABOUT</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link" href="services.html">SERVICES</a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <h1 class="site-heading text-center d-none d-lg-block text-uppercase">
                            <span class="logo-left">
                            <img src="assets/img/compass.png" class="logo";>
                            </span>
                            <span class="siteName-right">
                            <a class="nav-link" href="index.html"><span class="site-heading-upper text-primary">A WAY BACK</span> <span class="site-heading-lower">COUNSELING</span></a></span></h1>
                        </li>
                        <li class="nav-item px-lg-4"><a class="nav-link" href="faq.html">FAQs</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="about-heading">
            <div class="container first-section">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0"
                    src="assets/img/zion_wide.png" alt="..." />
                <div class="about-heading-content">
                    <div class="container">
                        <div class="about first-section col-lg-12 col-xl-8 m-auto">
                
                            <div class="row">
                                <div class="about-img p-5 blue-back rounded">
                                    <p>
                                        <b>Phone:</b> <br>
                                        (435) 220-7005</p>
                                        <p><b>Email:</b><br>
                                         awaybackcounseling@gmail.com<br></p>
                                        <p><b>Address:</b><br> 85 North 300 West, Suite 8, Washington, Utah 84780</p>
                                    <div>
                                        
                                            <a class="btn btn-primary btn-sm" href="https://www.instagram.com/awaybackcounseling/?hl=en" role="button"><i class="fa-brands fa-instagram"></i></a>

                                            <a class="btn btn-primary btn-sm" href="https://www.facebook.com/profile.php?id=100063736783080" role="button"><i class="fa-brands fa-facebook-f"></i></a>

                                            <a class="btn btn-primary btn-sm" href="https://www.psychologytoday.com/us/therapists/derek-barney-washington-ut/1005031" role="button">Psychology Today</a>

                                                                         
                                    </div>

                                </div>
                                <div class="bg-faded rounded about-text">
                                    <h2>Contact Us</h2>

                                   <!-- Contact Form Start -->
					    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" novalidate>
						
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<span class="text-danger">*<?php echo $nameErr; ?></span>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>"" />
							
						</div>

						<!-- Email Field -->
						<div class="form-group my-3">
							<label for="email">Email address:</label>
							<span class="text-danger">*<?php echo $emailErr; ?></span>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
						</div>
										
						<!-- Comments Field -->
						<div class="form-group my-3">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
						</div>

						<!-- Required Fields Note-->
						<div class="text-danger text-right">* Indicates required fields</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
                                </div>

                               
                
                            </div>
                        </div>
                    </div>
            </div>
                                </section>

                                <?php if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))) { 
                                    $myemail = 'awaybackcounseling@gmail.com';
                                    $to = $myemail; 
                                    $email_subject = "Contact form submission: $name";
                                    $email_body = "You have received a new message. ".
                                    " Here are the details:\n Name: $name \n Email: $email \n Message: \n $comment"; 
                                    
                                    $headers = "From: $myemail\n"; 
                                    $headers .= "Reply-To: $email";
                                    
                                    mail($to,$email_subject,$email_body,$headers);

                                    echo('<span class="blue-back p-5 confirmation">Thanks for contacting us, we will get back to you soon!</span>');

                                    } ?>


                               

        <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
        <footer class="footer text-faded bg-faded text-center py-5">
            <div><p class="m-0 small">Copyright &copy;<span id="year"></span> A Way Back Counseling 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>

