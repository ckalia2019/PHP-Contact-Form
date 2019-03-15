
<?php
include_once('header.php');
?>

<div class="container">
          <div class="form-container">
            <h3 class="heading">Step 1: Contact Information</h3>
            <form action="page2.php" method="post">
              <?php
              text('name', 'name', 'Your name', 'Enter your name');
              text('email', 'email', 'Your email address', 'Enter your email address');
              text('phone_number', 'phone_number', "Your phone number", 'Enter your phone number ex. 123-456-7890');
              submit('Go To Step 2 &raquo;');
              ?>
        </div>
    </div>
  
    <?php
include_once('footer.php');
?>
</div>





    





     


