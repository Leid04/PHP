<?php 
	
// Checking valid form is submitted or not 
if (isset($_POST['submit_btn'])) { 

	$name       = $_POST['name']; 
	$recaptcha  = $_POST['g-recaptcha-response']; 
  $secret_key = '6Lcg5YopAAAAAL0j8UGObhWHpwdVAdN6McO8X5gx'; 

	$url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha; 

	$response = file_get_contents($url); 
	$response = json_decode($response); 

	echo ($response->success == true)? 
    '<script>alert("Google reCAPTACHA verified")</script>' :
    '<script>alert("Error in Google reCAPTACHA")</script>';
}