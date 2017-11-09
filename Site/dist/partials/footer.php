<footer>
	<div class="footer-inner">
		<p id="footerTitle">Request consultation by appointment only</p>
		
		<div class="form-wrapper">
			
<!--
			<form action="mail.php" method="POST">
			<input type="text" name="name" placeholder="First and last name"><input type="text" name="email" placeholder="Email"><input type="text" name="phone" placeholder="Phone"><input type="text" name="date" placeholder="Appointment Date" id="datepicker" ><input type="submit" value="Send">
			</form>
-->
			
			    <form enctype="application/x-www-form-urlencoded;" id="contact-form-footer" class="contact-form form-horizontal" role="form" method="post">
                    <input type="text" class="form-control autoFillColor" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                    <input type="email" class="form-control autoFillColor"  name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                    <input type="text" class="form-control autoFillColor"  name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                    <textarea class="form-control messageInput autoFillColor"    name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                    <button type="submit" class="formSubmitButton"><?php echo $config->get('fields.btn-send'); ?></button>           
        		</form>
			<div class="clear"></div>
		</div>
		
		
		<nav class="footer-nav">
			 <ul>

			    <li><a href="thepractice.php">The Practice</a></li>
			    <li><a href="theconditions.php">The Conditions</a></li>
			    <li><a href="theprocedures.php">The Procedures</a></li>
			    <li><a href="the-outpaient-revolution.php">The Outpatient Revolution</a></li>
			    <li><a href="/blog">The Blog</a></li>
			    <li><a href="testimonials.php">Testimonials</a></li>
			    <li><a href="patient-resources.php">Patient Resources</a></li>
			    <li><a href="contact.php">Contact</a></li>
			 </ul>
			 <div class="clear"></div>
	  	</nav>
        
        <div class="footerBottom">
            <div class="left">
                <div class="logoWrapper">
                    <img id="absLogo" src="img/absLogo.png"/>
                </div>
                <div class="logoWrapper">
                    <img id ="hipaaLogo"src="img/hipaaLogo.png"/>
                </div> 
                <div class="logoWrapper">
                    <img id="abnsLogo" src="img/abnsLogo.png"/>
                </div>    
                <div class="clear"></div>
            </div>
            <div class="center">
                <div class="newsletter-wrapper">
	                
                        <form action="mail.php" method="POST">
                            <input type="text" name="email" placeholder="Sign up for newsletter">
                            <input class="newsletterSubmit" type="image" src="img/newsletterArrow.png" border="0" alt="Submit">
                        </form>

                    <div class="clear"></div>
                </div>
            
                <p class="termsConditins">All Rights Reserved &copy; 2017 |  Rasouli Spine | <a href="http://starmenusa.com/">Making Brands Work</a>&trade;</p>
            </div><!-- center -->
            <div class="right">
                <div class="socialWrapper">
                    <div class="socialIcon twitter"></div>
                    <div class="socialIcon facebook"></div>
                    <div class="socialIcon instagram"></div>
                    <div class="socialIcon youtube"></div>
                     <div class="clear"></div>
                </div>
            </div>
            <img class="logo mobile" src="img/global/rasouli-spine-logo.jpg">
             <p class="termsConditinsMobile mobile">All Rights Reserved &copy; 2017 |  Rasouli Spine | <a href="http://starmenusa.com/">Making Brands Work</a>&trade;</p>
            <div class="clear"></div>
        </div><!-- footerBottom -->
        
	</div><!-- footer inner-->
	 
</footer>
 
 		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
 		
<!--         <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
<!--          <script src="js/jquery-ui.min.js"></script> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
	
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
         <script src="js/vendor/slick/slick.min.js"></script>

        <script src="js/plugins.js"></script>
		<script type="text/javascript" src="tweetie.js"></script>

        <script src="js/main.js"></script>
        
        
       
        

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        
        	<script src="public/js/contact-form.js"></script>
		    <script type="text/javascript">
			    

			    
			    $('form').click(function() {
			    	var id = $(this).attr('id');
					alert(id);
					});
			    
		        new ContactForm(id, {
		            endpoint: './process.php'
		        });
		        
	        
		        
		        

    </script>
    </body>
</html>
