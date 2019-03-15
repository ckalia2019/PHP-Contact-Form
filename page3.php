<?php
include_once('header.php');

// STORES ARRAY FROM PAGE 1 IN SESSION
if ( ! empty( $_POST ) ) {
  $_SESSION['interests'] = $_POST['interests'];
}

?>
  <section id="form">
    <div class="container">
          <div class="form-container">
            <h3 class="heading">Step 3</h3>
            <form action="page4.php" method="post">
              <?php
              text('address', 'address', 'Address', 'Enter your address');
              text('city', 'city', 'City', 'Enter your city');
              text('state', 'state', 'State', 'Enter your state');
              submit('Go To Step 4 &raquo;');
              ?>
            </form>
          </div>
    </div>
  <section>

<?php include_once('footer.php'); ?>

</div>
