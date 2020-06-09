<!--written by -->
<body id ="page">
  <?php include('header.php');?>
	
    <section style = 'padding:70px; text-align:center;'><!--choosing which type of card they want-->
    <form method = "POST" action= "validate_payment.php">
        <h1>Payments</h1>
         <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>

          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>

          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Master card</label>
          </div>

        </div>
        <!--enterning names of the users -->
        <div class="row" style='text-align:center; margin-left:205px;'>
          <div class="col-md-4">
            <label for="cc-name">Name on card</label>
            <input type="text"  name = "fullname" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>

          <div class="col-md-4">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" name = "cardNumber" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
            
        <!--enterning dates and expiration dates of the users -->
        <div class="row" style='text-align:center; margin-left:205px;'>
          <div class="col-md-4 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text"  name = "expire" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" name = "cvv" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-secondary btn-lg btn-block" type="submit">Proceed to Payment</button>
    </form>
    </section>
   
 <?php include('footer.php');?>

</body>
</html><!--https://wireframe.cc/sPvyz8-->
