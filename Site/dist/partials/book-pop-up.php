<div class="bookingPopUp">
	
	<div class="bookingPopUpInner">
		<img class="closePopUpNav" src="/img/closeNav.png" alt="x close image">
		<p class="popUpTitle">Request consultation<br/> by appointment only</p>
		
		<div class="popUp-form-wrapper">
			
			
			<form enctype="application/x-www-form-urlencoded;" id="contact-form-mobile" class="contact-form form-horizontal" role="form" method="post">
			<p class="fieldTitle">Full Name</p>
			  <input type="text" class="form-control autoFillColor" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
			   <input type="text" class="form-control autoFillColor hide" name="form-nameLast" placeholder="<?php echo $config->get('fields.nameLast'); ?>" >
			<p class="fieldTitle">Email</p>
			 <input type="email" class="form-control autoFillColor"  name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
			<p class="fieldTitle">Phone</p>
			    <input type="text" class="form-control autoFillColor"  name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
			<p class="fieldTitle">Message</p>
			<textarea id="dateFormField" class="form-control messageInput autoFillColor dateFormField"    name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" ></textarea>
				
				<div class="clear"></div>
			
			
			<button type="submit" class="formSubmitButton mobileFormButton"><?php echo $config->get('fields.btn-send'); ?></button> 
			</form>
			
			
<!--
				<form enctype="application/x-www-form-urlencoded;" id="contact-form-footer" class="contact-form form-horizontal" role="form" method="post">
                    <input type="text" class="form-control autoFillColor" name="form-name" placeholder="<?php// echo $config->get('fields.name'); ?>Name" required>
                     <input type="text" class="form-control autoFillColor hide" name="form-nameLast" placeholder="<?php echo $config->get('fields.nameLast'); ?>" >
                    <input type="email" class="form-control autoFillColor"  name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                    <input type="text" class="form-control autoFillColor"  name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                    <textarea id="dateFormField" class="form-control messageInput autoFillColor"    name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                    <button type="submit" class="formSubmitButton"><?php echo $config->get('fields.btn-send'); ?></button>           
        		</form>
-->
			
			
			
			
			
			<div class="clear"></div>
		</div>
		
	</div>
	
	

</div>