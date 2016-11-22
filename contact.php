<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--These are just for fun, because it is good practice-->
          <meta name="description" content="Kristelle MacSween Portfolio">
          <meta name="keywords" content="Media Design, Ottawa, creative, Web Design, Graphic Design, Developer, Multimedia Designer, Multimedia Developer, Web, UX, User Interface, User Experience, Accessibility, Ontario, Motion Graphics, Banners, Branding, logo design">
          <meta name="author" content="Kristelle MacSween Portfolio">
          
<title>Kristelle MacSween - UI/UX Designer/Developer</title>
    
    <link rel="shortcut icon" href="favicon.ico"/>
    
    <!-- Latest compiled and minified CSS using Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- Custom styles -->
    <!-- Added version to link to make sure the css gets refreshed in every visitor's cache Allo!-->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="styles/style.css?version=58">
    <link rel="stylesheet" type="text/css" href="styles/media.css?version=58">

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lora:400i,700i" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
    
  </head>
    <body id="container-fluid">
    <?php 
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['firstname'])) {
  $firstname = $_REQUEST['firstname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
  else{ $errors[] = 'First name can only contain letters.';}
  } else {$errors[] = 'You forgot to enter your first name.';}
  
  // Check for a proper Last name
  if (!empty($_REQUEST['lastname'])) {
  $lastname = $_REQUEST['lastname'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
  else{ $errors[] = 'Last name can only contain letters.';}
  } else {$errors[] = 'You forgot to enter your last name.';}
  
  //Check for a valid phone number
  if (!empty($_REQUEST['phone'])) {
  $phone = $_REQUEST['phone'];
  $pattern = "/^[0-9\_]{7,20}/";
  if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
  else{ $errors[] = 'Your phone number should contain only numbers.';}
  } else {$errors[] = 'You forgot to enter your phone number.';}
  //Check for valid email
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/";// This is a regular expression that checks if the email is valid
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Please enter a valid email';}
  } else {$errors[] = 'You must enter an email.';}
  
  // Check for a message
  if (!empty($_REQUEST['details'])) {
  $details = $_REQUEST['details'];
  } else {$errors[] = 'You forgot to enter a message.';}
  }
  //End of validation 
  if (isset($_REQUEST['submitted'])) {
  if (empty($errors)) { 
  $from = "My Portfolio site!"; //Appear as an email from site name
  // Change this to the email address you want the form sent to
  $to = "kmacsween777@gmail.com"; 
  $subject = "Contact request - from my Site! Comment from " . $name . "";
  
  $message = "Message from: " . $firstname . " " . $lastname . " 
  Phone: " . $phone . " 
  Email:".$email  ."
  Message: " . $details ."";
  mail($to,$subject,$message,$from);
  }
}
?>

    
 <header>     
        <div class="container-fluid">
           <div class="navbar smooth" role="navigation">
    
        <div class="nav navbar-nav navbar-left">
                <a class="logo" href="index.html">
                    <img src="images/logo01.svg" class="img-responsive my-logo" alt="Kristelle MacSween Logo"/>
                </a>
        </div><!--/.nav navbar-nav navbar-left -->
        <div class="navbar-right">
    <ul class="nav navbar-nav pull-right">
        <li class="about-me">
        <a href="about.html" class="nav-icons">
        
        <p class="nav-icon-text">about</p>
        </a>
        </li>
        
        <li class="my-work">
        <a href="work.html" class="nav-icons">
        
        <p class="nav-icon-text">work</p>
        </a>
        </li>
        
        <li class="contact-me active">
        <a href="#" class="nav-icons">
        
        <p class="nav-icon-text">contact</p>
        </a>
        </li>
    </ul>
    </div>
</div>
 </div><!--/.container-fluid-->
 </header>

        
 <div class="container-fluid neg-bot">
  <div class="slanted-wrap">
   <div class="lower">
   </div><!--/.lower -->
  </div><!--/.slanted-wrap -->

   
    <div class="col-md-12">
 
 <div class="row">
  <div class="col-md-1 col-sm-1"></div>
   <div class="col-md-5">
   <div class="form-wrap">
   
    <!-- Feedback -->
 <?php 
  //Print Errors
  if (isset($_REQUEST['submitted'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<div class="feedback-msg"><br /><p class="occured">The following occurred:</p><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><p class="Lora heavier">Sorry your mail could not be sent due to input errors.</p></div>';}
   else{echo '<div class="feedback-msg"><br /><p class="thanx">Your mail was sent. Thank you!</p><p class="list-head">Below is the message that you sent:</p>'; 
  echo "<span>Message from: &nbsp</span>". $firstname . "  " . $lastname . " <br /><span>Phone: &nbsp</span>".$phone." <br /><span>Email:  &nbsp </span>" .$email."";
  echo "<br /><span>Message:  &nbsp </span>" . $details . "</div>" ;
  
  }
  }
//End of errors array
  ?> 
  <div class="my-form"> 
   <div class="line-up">
   <p class="form-heading coralText">Please get in touch!</p>  
   </div><!--/.line-up -->   
          
  <form action="" method="post">
  <div class="row">
  <label>First Name: <br />
  <input name="firstname" type="text" value="" /></label>
  <label>Last Name: <br />
  <input name="lastname" type="text" value="" /></label>
  </div><!--/.row-->
  
  <div class="row">
  <label>Phone Number: <br />
  <input name="phone" type="text" value="" /></label>
  <label>Email: <br />
  <input name="email" type="text" value="" /></label>
  </div><!--/.row-->
  
 
  <div class="line-up">
  <label>Message:<br/> 
  <textarea name="details" rows="4"  class="message" type="text" value="message" /></textarea>
  </label>
  <br/>
  </div><!--/.line-up -->
 
  <div class="line-up">
  <input name="submitted" type="submit" value="Submit" class="submit"/>
  </div><!--/.line-up -->
  </form>
  
  

             
               </div><!--form-wrap-->
               </div><!--my-form-->
               </div><!--/.col-md-5 -->
               
               <div class="col-md-6 imgPad">
               <img src="images/me.svg" class="img-responsive" alt="me"/>
               </div><!--/.col-md-5-->
               </div><!--/.row -->
               </div><!--/.col-md-12 -->
              
          </div><!--/.container-fluid neg-bot-->
   
        

<footer class="clearfix" id="footer">
    <div class="col-md-6 pull-left address">
    <p class="marg-left"><span class="location-icon"><img class=""  src="images/location-icon.svg" alt="Location"></span> Ottawa, Ontario</p>
      <p class="marg-left"><a href="mailto:kmacsween777@gmail.com">kmacsween777@gmail.com</a></p>
      <p class="copyright marg-left">© Kristelle MacSween</p>
</div><!-- /.col-md-6 pull-left -->
<div class="col-md-6 pull-right">
<ul class="icons">

<li><a href="https://ca.linkedin.com/in/kristelle-macsween-512b89a7" target="_blank"><img class="img-responsive" src="images/linkedin.svg" alt="linkedIn icon"/></a></li>
<li><a href="https://www.behance.net/macs0014310e" target="_blank"><img class="img-responsive" src="images/behance.svg" alt="behance icon"/></a></li>
<li><a href="https://www.youtube.com/channel/UCDG0FSRGw0RPq3_sBmHq4Lw" target="_blank"><img class="img-responsive" src="images/youtube.svg" alt="youtube icon"/></a></li>
  
</ul>
</div><!-- /.col-md-6 pull-right -->
  
</footer>
<div class="slanted-wrap03"></div>
    <!-- Zee javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
   
    
</body>
</html>