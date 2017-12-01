<div class="left">									
					<p class="heroLargeText">Get in Touch <span class="block">With US</span></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus a nisl et accumsan. Maecenas rhoncus quam non ipsum dapibus dignissim. Pellentesque tortor nunc, molestie sit amet ipsum eu, commodo lacinia dui. In sollicitudin orci purus, in sollicitudin quam finibus tincidunt. Vivamus dapibus lectus sit amet lectus accumsan, at posuere risus gravida. </p> 
				
				<p class="formAddress">444 South San Vicente Blvd.<br/> Suite 901<br/> Los Angeles, CA 90048</p>	
				<p>OFFICE: 310.248.7330</p>	
				<p>FAX: 310.248.7395</p>	
					  
</div><!-- left-->
			
<div class="right">
                
				<div class="form-wrapper" >
					
					
		<form enctype="application/x-www-form-urlencoded;" id="contact-form-desktop" class="contact-form form-horizontal" role="form" method="post">
                    <input type="text" class="form-control autoFillColor" name="form-name" placeholder="<?php  echo $config->get('fields.name'); ?>" required>

                    <input type="email" class="form-control autoFillColor"  name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                    <input type="text" class="form-control autoFillColor"  name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>                 
                    <textarea class="form-control messageInput autoFillColor "    name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>

                    <button type="submit" class="formSubmitButton bodyFormButton"><?php echo $config->get('fields.btn-send'); ?></button>           
        </form>
					
				
				</div><!-- form-wrapper -->
                
				
</div><!-- right -->
			<div class="clear"></div>
			
