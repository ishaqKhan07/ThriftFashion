<?php include 'header-link.php';
include 'header.php';


$nameError=$emailError = null;
if (isset($_POST['send'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$validate = true;
$query="INSERT INTO `contact`
    (`name`, `email`, `subject`,`message`) VALUES
    ('$name','$email','$subject','$message')";
    mysqli_query($connect,$query);
    

	if(empty($name)){
		$nameError = '*Please enter name';
		$validate = false;
	}


	if($validate == true){
			if(empty($email)){
			$emailError = '*Please enter email';
			$validate = false;
		}
	}

	if($validate == true){
		if(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email)
		){
			$emailError = '*invalid Email';
			$validate = false;
		}
	}


}

if (isset($_POST['subscribe'])) {
    $email=$_POST['email'];
    
    $sub="INSERT INTO `newsletter`
        ( `email`) VALUES
        ('$email')";
        mysqli_query($connect,$sub);
}    


 ?>

<link rel="stylesheet" href="css/contact.css">
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>contact us</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>
    </section>
    <section class="inner-section contact-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card"><i class="icofont-location-pin"></i>
                        <h4>head office</h4>
                        <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card active"><i class="icofont-phone"></i>
                        <h4>phone number</h4>
                        <p><a href="#">009-215-5596 <span>(toll free)</span></a><a href="#">009-215-5595</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card"><i class="icofont-email"></i>
                        <h4>Support mail</h4>
                        <p><a href="#">contact@example.com</a><a href="#">info@example.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd" aria-hidden="false" tabindex="0"></iframe></div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form" method="POST">
                        <h4>Drop Your Thoughts</h4>
                        <div class="form-group">
                        <span class="text-danger"><?php echo $nameError; ?></span>
                        
                            <div class="form-input-group"><input class="form-control" type="text"  required="" name="name" value="<?php if(isset($_POST['send'])){
				echo $name;
			} ?>"
                                    placeholder="Your Name"><i class="icofont-user-alt-3"></i></div>
                        </div><span class="text-danger"><?php echo $emailError; ?></span>
                        <div class="form-group">
                            <div class="form-input-group"><input class="form-control" type="text"  required="" name="email" value="<?php if(isset($_POST['send'])){
				echo $email;
			} ?>"
                                    placeholder="Your Email"><i class="icofont-email"></i></div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group"><input class="form-control" type="text" name="subject" required=""
                                    placeholder="Your Subject"><i class="icofont-book-mark"></i></div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group"><textarea class="form-control" name="message" required=""
                                    placeholder="Your Message"></textarea><i class="icofont-paragraph"></i></div>
                        </div><button type="submit" name="send" class="form-btn-group"><i class="fas fa-envelope"></i><span>send
                                message</span></button>
                    </form>
                </div>
            </div>
           
        </div>
    </section>
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form" method="POST">
                        <input type="email" name="email" placeholder="Enter Your Email Address">
                    <button type="submit" name="subscribe"><span>
                        <i class="icofont-ui-email"></i>Subscribe</span></button>
                                </form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer-link.php';
include 'footer.php';
?>