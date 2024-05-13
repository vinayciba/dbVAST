<?php
include 'include/header.php';
?>

<div class="contact-container">
    <div class="contact-content">
    <div class="row">
  <div class="column info line">
    <h2>Contact Info</h2>
    <ul>
        <li>
            <span><i class="las la-user"></i></span>
            <span>Dr. Vinaya Kumar Katneni,<br>
                    Senior Scientist,<br>
                    Nutrition, Genetics and Biotechnology Division,<br>
                    ICAR-Central Institute of Brackishwater 
                    Aquaculture  
            </span>
        </li>
        <li>
            <span><i class="las la-map-marker-alt"></i></span>
            <span>75 Santhome High Road, MRC Nagar, RA Puram,<br>
                    Chennai - 600 028
            </span>
        </li>
        <li>
            <span><i class="las la-envelope"></i></span>
            <span>Vinaya.Katneni@icar.gov.in</span>
        </li>
    </ul>
  </div>
  
  <div class="column contact-form">
    <h2>Contact Form</h2>
    <form action="mailto:dineshbabu0403@gmail.com" method="POST" enctype="text/plain">
      
      <input type="text" id="name" name="name" placeholder="Name" required><br><br>
      <input type="email" id="email" name="email" placeholder="Email" required><br><br>
      <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea><br><br>
      <input type="submit" value="Send">
    </form>
  </div>
</div>

<div class="row">
  <div class="column">
  <h2>Location</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15548.94061435037!2d80.2729445!3d13.0206918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526611908ca2b7%3A0xe4274b5058b34bea!2sICAR%20-%20Central%20Institute%20of%20Brackishwater%20Aquaculture!5e0!3m2!1sen!2sin!4v1685113325519!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="same-origin"></iframe>
  </div>
</div>

    </div>
</div>



<?php include 'include/footer.php'; ?>