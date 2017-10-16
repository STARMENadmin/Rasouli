<footer>
	<div class="footer-inner">
		<p id="footerTitle">Request consultation by appointment only</p>
		
		<div class="form-wrapper">
			<form action="mail.php" method="POST">
			<input type="text" name="name" placeholder="First and last name">
			 <input type="text" name="email" placeholder="Email">
			 <input type="text" name="phone" placeholder="Phone">
			<input type="text" name="date" placeholder="Appointment Date" id="datepicker">
			
			<input type="submit" value="Send">
			</form>
			<div class="clear"></div>
		</div>
		
		
		<nav class="footer-nav">
			 <ul>

			    <li><a href="/thepractice.php">The Practice</a></li>
			    <li><a href="/theconditions.php">The Conditions</a></li>
			    <li><a href="/theprocedures.php">The Procedures</a></li>
			    <li><a href="/the-outpaient-revolution.php">The Outpatient Revolution</a></li>
			    <li><a href="/blog">The Blog</a></li>
			    <li><a href="/testimonials.php">Testimonials</a></li>
			    <li><a href="/patient-resources.php">Patient Resources</a></li>
			    <li><a href="/contact.php">Contact</a></li>
			 </ul>
			 <div class="clear"></div>
	  	</nav>
        
        <div class="footerBottom">
            <div class="left">
                <div class="logoWrapper">
                    <img id="absLogo" src="/img/absLogo.png"/>
                </div>
                <div class="logoWrapper">
                    <img id ="hipaaLogo"src="/img/hipaaLogo.png"/>
                </div> 
                <div class="logoWrapper">
                    <img id="abnsLogo" src="/img/abnsLogo.png"/>
                </div>    
                <div class="clear"></div>
            </div>
            <div class="center">
                <div class="newsletter-wrapper">
                        <form action="mail.php" method="POST">
                            <input type="text" name="email" placeholder="Sign up for newsletter">
                            <input class="newsletterSubmit" type="image" src="/img/newsletterArrow.png" border="0" alt="Submit">
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
                </div>
            </div>
            <div class="clear"></div>
        </div><!-- footerBottom -->
        
	</div><!-- footer inner-->
	 
</footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
 <script src="../../js/jquery-ui.min.js"></script>
  <script src="../../js/main.js"></script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
