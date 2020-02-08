<?php 
if (isset($_POST['send_message_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
	<div style='border-radius:5px; background:#eee; border:#555; padding:30px; '>
		<h2>Hi Sahil this is a contact information of ".$name.".</h2>
		<h3><b>Email Id : </b>".$email."</h3>
		<p style='border-radius:10px; background:#000; color:#fff; padding:30px; '><b>Message : </b>".$msg."</p>
	</div>
  </body>
  </html>";
  if (mail('sahilsinghmca@gmail.com', $name, $message, $headers)) {
   echo '
   <html>
     <head>
        <link href="main.css" rel="stylesheet" type="text/css">
     </head>
     <body class="mail-box">
        <div>
            <h2>Thanks '.$name.'! Your Email has been Sent.</h2>
            <input type="button" value="Go Back To Home Page!" onclick="history.back(-1)" />
        </div>
     </body>
   </html>';
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>