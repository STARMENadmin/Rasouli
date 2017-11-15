<?php



if (stripos($_SERVER['REQUEST_URI'], 'index.php')){

	$title = 'Rasouli Spine | Home';
}

if (stripos($_SERVER['REQUEST_URI'], 'thepractice.php')){
	$title = 'Rasouli Spine | The Practice';
}

if (stripos($_SERVER['REQUEST_URI'], 'theconditions.php')){
	$title = 'Rasouli Spine | The Conditions';
}

if (stripos($_SERVER['REQUEST_URI'], 'theprocedures.php')){
	$title = 'Rasouli Spine | The Procedures';
}

if (stripos($_SERVER['REQUEST_URI'], 'the-outpaient-revolution.php')){
	$title = 'Rasouli Spine | The Outpatient Revolution';
}

if (stripos($_SERVER['REQUEST_URI'], 'contact.php')){
	$title = 'Rasouli Spine | Contact';
}

if (stripos($_SERVER['REQUEST_URI'], 'testimonials.php')){
	$title = 'Rasouli Spine | Testimonials';
}

if (stripos($_SERVER['REQUEST_URI'], 'patient-resources.php')){
	$title = 'Rasouli Spine | Patient Resources';
}



 ?>