<!DOCTYPE html>
<html>
<head>
  <title>Vet Appointment</title>
  <link rel="stylesheet" type="text/css" href="Appointment.css">
</head>
<body>
  <div class="layer">
    <div class="headquate">
       <img class="logo" src="https://cdn.iconscout.com/icon/free/png-256/pet-hospital-1131157.png">
        <div class="quate">
            <h1>Book You Slot And Save Your Time</h1>
            <div class="topic">
                <p>Pet Healthcare At your Demand !<br>Find a nearby doctor and book an appointment instanly.</p>
              </div>
              <img class="pet" src="https://gdurl.com/N2RX">
        </div>
    </div>
    <div class="appointment">
    <div class="fhead">Apointment Form</div>
    <form action="Appointment.php" method="POST">
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
          <span class="details">Pet Name</span>
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
          <span class="details">Select Pet Clinic</span>
         <select>
                <option>Select</option>
                <option>City Pet Animal Hospital</option>
                <option>Pets Place Animal Clinic</option>
                <option>City Pet Hospital</option>
                <option>Animal Veterinary Clinic</option>
                <option>Best Care</option>
                <option>Pet Rays Animal Clinic</option>
                <option>Animal Clinic</option>
                <option>CIS Care Pet Clinic</option>
                <option>Kirillawala Animal Clinic</option>
                
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
          <input type="submit" name="book" value="BOOK APPOINTMENT">
        </div>
      </div>
        </form>
  </div>
  </div>

</body>
</html>
