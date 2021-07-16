<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="TBook.css">
</head>
<body>
<div class="layer">
<div class="headquate">

<div class="quate">
<h1>Book You Slot And Save Your Time</h1>
<div class="topic">
<p>Pet Transport At your Demand !<br>Find a nearby transport service center and booking instanly for your pet.</p>
</div>
<img class="pet" src="https://c.tenor.com/01bNuyeL6dMAAAAj/mandarine-orange.gif">
</div>
</div>
<div class="appointment">
<div class="fhead">Booking Form</div>
<form action="appointment.php" method="POST">
<?php
$userEmail = "";
if (isset($_POST['book'])) {//if book submit click
$userEmail = $_POST['email'];//getting user email
if (filter_var($userEmail,FILTER_VALIDATE_EMAIL))
{
// validating user entered email
$subject = "Thanks for get your vaterinary appointment";
$message = "Thank you for making a appointment with Pet City. ";
$sender = "From:petcity9899@gmail.com";//this is that email which I have put while configuring XAMPP folder
if (mail($userEmail, $subject, $message, $sender)) {
// php function to send mail
?>
<!--show a success message if mail sent successful-->
<div class="alert success">Thanks For Your Appointment.</div>
<?php
$userEmail = ""; //we'll again leave this field blank once mail send
}else{
?>
<!--show an error message if somehow mail can't be sent-->
<div class="alert error">Failed while sending your email</div>
<?php

 }
}
else
{
?>
<!--show a error message if mail is not valid-->
<div class="alert error"><?php echo $userEmail ?> is not a valid email</div>
<?php
}
}
?>
<div class="user-details">
<div class="input-box">
<span class="details">Pet Owner Name</span>
<input type="text" id="pname" placeholder="Enter Pet Owner Name" required="">
</div>
<div class="input-box">
<span class="details">Pet Owner Email</span>
<input type="text" name="email" placeholder="Enter Pet Owner Email" required value="<?php echo $userEmail?>">
</div>
<div class="input-box">
<span class="details">Pet Owner Phone</span>
<input type="text" id="pnumber" placeholder="Enter Pet Owner Phone" required="">
</div>
<div class="input-box">
<span class="details">Your Location</span>
<input type="text" id="name" placeholder="Enter Pet Name" required="">
</div>
<div class="input-box">
<span class="details"> Pet Type</span>
<select>
<option>Dog</option>
<option>Cat</option>
<option>Bird</option>
<option>Other</option>
</select>
</div>
<div class="input-box">
<span class="details">Pet Breed</span>
<input type="text" id="breed" placeholder="Enter Pet Breed" required="">
</div>
<div class="input-box">
<span class="details">Pet Age</span>
<input type="text" id="age" placeholder="Enter Pet Age" required="">
</div>
<div class="input-box">
<span class="details">Select Transport Service</span>
<select>
<option>Select</option>
<option>Pet Taxi Service</option>
<option>Emergency Service</option>
<option>Pet Travel Service</option>

</select>
</div>
<div class="input-box">
<span class="details">Choose Date</span>
<input type="date" placeholder="" required="">
</div>
<div class="input-box">
<span class="details"> Choose Time</span>
<select>
<option>Select</option>
<option>14.00</option>
<option>14.15</option>
<option>14.30</option>
<option>14.45</option>
<option>15.00</option>
<option>15.15</option>
<option>15.30</option>
<option>15.45</option>
<option>16.00</option>
<option>16.15</option>
<option>16.30</option>
<option>16.45</option>
<option>17.00</option>
<option>17.15</option>
<option>18.30</option>
<option>18.45</option>
<option>19.00</option>
</select>
</div>
<div class="button">
<input type="submit" name="book" value="BOOK NOW">
</div>
</div>
</form>
</div>
</div>
</body>
</html>
