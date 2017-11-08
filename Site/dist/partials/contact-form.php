<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

?>



<div class="left">									
					<p class="heroLargeText">Get in Touch <span class="block">With US</span></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus a nisl et accumsan. Maecenas rhoncus quam non ipsum dapibus dignissim. Pellentesque tortor nunc, molestie sit amet ipsum eu, commodo lacinia dui. In sollicitudin orci purus, in sollicitudin quam finibus tincidunt. Vivamus dapibus lectus sit amet lectus accumsan, at posuere risus gravida. </p>   
</div><!-- left-->
			
<div class="right">
                
				<div class="form-wrapper" >
					
					
		<form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
    
                    <input type="text" class="form-control autoFillColor" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
          
            
                    <input type="email" class="form-control autoFillColor" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
          
            
                    <input type="text" class="form-control autoFillColor" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
           
            
           
                    <textarea class="form-control messageInput autoFillColor"  id="form-message"   name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
           
            
            <div class="form-group">
            
                    <button type="submit" class="formSubmitButton"><?php echo $config->get('fields.btn-send'); ?></button>
               
            </div>
        </form>
					
				
				</div><!-- form-wrapper -->
                
				
</div><!-- right -->
			<div class="clear"></div>
			
	<script src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './process.php'
        });
    </script>