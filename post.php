<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="layout.css" type="text/css" rel="stylesheet">
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="responsive-iframes.js" type="text/javascript"></script>
</head> 
<body> 

<div class="a2-bg" data-role="page" id="page" >
	<div data-role="header" data-theme="a">
		<h1>a2 Fairs</h1>
	</div>
	<div data-role="content">
 <div class="a2-menu">
 <center><table border="0" cellpadding="0" cellspacing="0">
   <tr><td><a href="#calendar"><img src="images/calendar.png"></a></td><td><a href="#itinerary"><img src="images/itinerary.png"></a></td><td><a href="#statistics"><img src="images/statistics.png"></a></td><td><a href="#booking"><img src="images/booking.png"></a></td><td><a href="#ask"><img src="images/ask.png"></a></td>
   </tr></table></center>
   </div>	
  </div>
    
       <div class="bg-image">
<?php

if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])) {
   if(empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['subject']) || empty($_POST['message'])) {
      echo 'Please fill all blank areas in the form!';
   } else {
      $name = strip_tags($_POST['name']);
      $mail = strip_tags($_POST['mail']);
      $subject = strip_tags($_POST['subject']);
      $message = strip_tags($_POST['message']);
      $content = 'Name: ' . $name . '<br />'.'Mail: '. $mail . '<br />' . $message;
      mail('info@a2fairs.com', $subject, $content);
      echo 'Your message has been succesfully sent! Thank you.';
   }
} else {
   echo 'Please use the form!';
}


?>
			
  </div>
  <br />
	<div class="bg-image">
		<a href="#register"><img src="images/bottom.png" /></a>
	</div>
    <br />
    	<div data-role="footer" data-theme="a">
		<h4>a2 Fairs</h4>
	</div>
</div>


</body>
</html>