<?php
    //the subject
    $sub = "Test Mail";
    //the message
    $msg = "Hey There, I'm Testing Mail";
    //recipient email here
    $rec = "shub2495@gmail.com";
    //send email
    mail($rec,$sub,$msg);        
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Send PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>


<div class="contact container shadow" id="contact_form">
  <div class="contact row header">
    <h2>CONTACT US</h2>
    <h3>Request information, book a studio, or plan your event!</h3>
    <div id="contact_results"></div>
  </div>
  <div class="contact row body" id="contact_body">
    <div class="contact-elements">
    <form action="" method="post">
      <ul>
        <li>
          <p class="left">
            <label for="name">name</label>
            <input type="text" name="name" id="name" required="true" class="input-field" placeholder="Jane Doe" />
          </p>
          <p class="pull-right">
            <label for="phone2">phone</label>
            <input type="text" name="phone2" maxlength="15" class="tel-number-field long" placeholder="123 456 7890" />
          </p>
        </li>
        <div class="center-btn" style="position:relevant; height:5vh;">
          <li>
            <label for="email">email <span class="req">*</span></label>
            <input type="email" name="email" required="true" class="input-field" placeholder="jane.doe@gmail.com" />
          </li>
        </div>

        <li>
          <div class="contact divider"></div>
        </li>
        <li>
          <label for="message">enquiry</label>
          <textarea cols="46" rows="8" name="message" id="message" class="textarea-field" required="true"></textarea>
        </li>
      </ul>
      </form>
    </div>
    <div class="center-btn" style="position:relevant; height:5vh;">
      <li>
        <input id="submit_btn" class="btn btn-submit" type="submit" value="Submit" />
      </li>
    </div>
  </div>
</div>

    
</body>
</html> -->