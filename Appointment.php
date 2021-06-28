<!DOCTYPE html>
<html>
<head>
  <title></title>
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
    <form>
      
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
        </form>
  </div>

</body>
</html>
