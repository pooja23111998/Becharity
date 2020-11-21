
<!--THANKYOU CARD-->
    <div class="container" style="padding-top: 20px;">
      <div class="page-header" style="background-color: white;opacity:0.8;">
        <strong><p style="font-size:34px;"><i><center> Becharity - Thankyou For Your Donation!</i></p></strong>
    <p style="font-size: 20px;"><i>
Together we are making a difference! Your continued support of our mission is deeply gratifying to us, and we hope it is the same for you. We were honored to see that you have chosen to increase your donation this [month/year]. Your gift has already started to impact.Please feel free to contact, if you have any specific questions, we would love the opportunity to thank you again! With deepest gratitude, and warmest wishes,</i>
</p></div>
<?php

include 'instamojo/Instamojo.php';

$api = new instamojo\Instamojo('test_0f44e36356ccedc410cfa004746', 'test_0c66916ec4a3e8e803cf817292a

','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid); ?>
  <div class="row">
             <div class="col-sm offset-md-3 col-md-6">
  <div class="card" style="border-radius: 10px;">
  <div class="card-header bg-dark" style="color: white;"><h2><i>Transaction details</i></h2></div>
  <div class="card-body">
    <div style="padding-left: 10px;font-size: 20px;">
                <p><b>Donar Name :</b> <?php echo htmlentities($response['payments'][0]['buyer_name']); ?></p>
                <p><b>Donar Email-ID:</b> <?php echo htmlentities($response['payments'][0]['buyer_email']); ?></p>
                <p><b>Donated Amount:</b> <?php echo htmlentities($response['payments'][0]['amount']); ?></p>
                <p><b>Payment ID:</b> <?php echo htmlentities($response['payments'][0]['payment_id']); ?></p>
            </div>
  </div>
  <div class="card-footer"><h4>Status: <?php echo htmlentities($response['status']); ?></h4>  </div>
</div>
</div>
</div>
<?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?>
<div class="row" style="padding-top:30px;">
  <div class="col-xs-12 offset-md-3 col-md-6">
<div style="background-color: black; font-size: 15px;text-align: center; color: white;"><i>Kindly Check Your Email For Transaction Details and confirmation message!</i> </div>
<a href="index.html"><center><style="font-size:34px; button type="button" color: red>Home</button></a>
</div>
</div>
</div>
<!--THANKYOU CARD-->

 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
