<?php 

include 'header.php';
include 'contact-form.php';

  ?>
<div class="container">
    <div class="row">
      <div class="recent">
        <button class="btn-primarys"><h3>Contact Us</h3></button>
        <hr>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="recent">
          <button class="btn-primarys"><h3>Send us a message</h3></button>
        </div>

        
        <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post" role="form" class="contactForm">
        <span class=" <?= $msgClass ?> " > <?php echo $success; ?> </span>
          <div class="form-group">
            <span class="error">
              <?php echo $name_error; ?>
            </span>
            <input type="text" name="name" class="form-control" required="required" id="name"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?= $name; ?>" placeholder="Your Name"/>
            <div class="validation"></div>
          </div>

          <div class="form-group">
            <span class="error">
              <?php echo $email_error; ?>
            </span>
            <input type="email" class="form-control" required="required" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" value="<?= $email; ?>"  />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <span class="error">
              <?php echo $subject_error; ?>
            </span>
            <input type="text" class="form-control" required="required" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="<?= $subject; ?>"  />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <span class="error">
              <?php echo $message_error; ?>
            </span>
            <textarea class="form-control" required="required" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" value = " <?= $message; ?> "></textarea>
            <div class="validation"></div>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

      <div class="col-lg-6">
        <div class="recent">
          <button class="btn-primarys"><h3>Get in touch with us</h3></button>
        </div>
        <div class="contact-area">
          <p>
            Lau Guest would like to thank you for taking time to visit our website. For bookings ad any other queries please fill our below online form. You will receive a response from us as quickly.
          </p>

          <h4>Address:</h4>P.O Box 2015 Machakos<br>
          <h4>Telephone:</h4>044 - 20405/24234, 0728527310</br>
          <h4>Mail:</h4>accomodation@lauguesthouse.co.ke
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <hr>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="google-map" data-latitude="-1.5177" data-longitude="37.2634"></div>
    </div>
  </div>




<?php 

include 'footer.php';

 ?>