<?php session_start();
 $id  = $_GET['id'];
 $bid  = $_GET['bid'];
// error_reporting(E_ALL);
//ini_set('display_errors', 1);
 
$conn = new mysqli("localhost", "root", "ShowBiz@Casting2021", "jaymataji");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT * FROM user where id=".$id;  
$result = $conn->query($sql);
//print_r($result->fetch_assoc()); die;
while($row = $result->fetch_assoc()) {
      $firstname = $row["first_name"];
	  $mobile = $row["mobile"];
	  $email = $row["email"];
  }  
  
 $sql1 = "SELECT * FROM user_bhogbooking where id='".$bid."'";  
$result1 = $conn->query($sql1);
//print_r($result->fetch_assoc()); die;
while($row1 = $result1->fetch_assoc()) {
      $amount = $row1["amount"];
	  
  }  
  //$amount = 1;
  $fee = $amount*100; 
   
 ?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script>
  var SITEURL = "https://thepnbs.com/";

  pay();
  function pay(e){
    var totalAmount = 100;
    var product_id =  <?php echo time()."01"; ?>;
	 var studid = "56";
    var options = {
    "key": "rzp_live_igY69ciZFohJb7",
    "amount": "<?php echo $fee ?>", // 2000 paise = INR 20
    "name": "<?php echo $firstname;  ?>",
    "description": "Fee",
	"studid": "<?php echo $id;  ?>",
    "currency": "INR",
	"callback_url": SITEURL + 'callback2.php?id=<?php echo $bid;  ?>&fee=<?php echo $amount ?>&studid=<?php echo $id ?>',
	"redirect": true,
    "image": "https://thepnbs.com/assets/images/login_icon.png",
    "handler": function (response){
       
          $.ajax({
            url: SITEURL + 'callback2.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,studid : studid,
            }, 
            success: function (msg) {
              
              window.location.assign(SITEURL+'successinvoice2.php?id='+msg.invoice_id+'&vid='+msg.sub_invoice_id)
            
              
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