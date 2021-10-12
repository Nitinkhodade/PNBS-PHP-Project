

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script>
  var SITEURL = "<?php echo base_url() ?>";

  pay();
  function pay(e){
    var totalAmount = <?php echo $total; ?>;
    var product_id =  <?php echo $merchant_order_id;?>;
    var options = {
    "key": "<?php echo $key_id; ?>",
    "amount": "<?php echo $total;?>", // 2000 paise = INR 20
    "name": "<?php  echo $name;?>",
    "description": "<?php  echo $title;?>",
    "currency": "<?php echo $currency_code;?>",
    "image": "<?php echo base_url() ?>assets/images/login_icon.png",
    "handler": function (response){
       
          $.ajax({
            url: SITEURL + 'callback.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
               
              window.location.assign(SITEURL+'successinvoice.php?id'+msg.invoice_id+'&vid='+msg.sub_invoice_id)
            
              
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
 
  };
 
</script>