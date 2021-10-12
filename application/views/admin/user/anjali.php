

<!-- Container fluid  -->

<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">All Anjali</li>
            </ol>
        </div>
      
    </div>
    <!-- Start Page Content -->
   
    <div class="row">
        <div class="col-12">

            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">
				<div class="card-header">
					<h3 class="text-themecolor m-b-0 m-t-0">Anjali Booking</h3>
				</div>
				<div class="card-body">
				 	
					
					
					
					<div class="container">
  <div class="row">
    <div class="col-sm-12 mb-3">
      <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
  </div>
  <div class="row" id="myItems">
    <div class="col-sm-12 mb-3">
	
	
	
	  <?php foreach ($anjali1 as $row): ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a style="color:red;font-size: 19px;"  href="#"><?php echo $row['passcode']; ?></a></h5>
		  <h5 class="card-title"><a  href="#"><?php echo $row['name']; ?></a></h5>
          <h6 class="card-subtitle mb-2 text-muted" >Number of Person: <?php echo $row['totalperson']; ?></h6>
          <p class="card-text"><?php echo $row['days']; ?>
		  <br>
		  <?php if ($row['status'] == 1): ?>
										<!--<a href="<?php echo base_url('admin/user/deactive_bhog/'.$row['id']) ?>" data-toggle="tooltip" data-original-title="Deactive"> <button class="btn-lg">Collected </button></a>-->
										
										
										 
										
										
									<?php else: ?>
										<!--<a href="<?php echo base_url('admin/user/active_bhog/'.$row['id']) ?>" data-toggle="tooltip" data-original-title="Active"><button class="btn-lg"> Collect</button> </a>-->
									
										<a href="<?php echo base_url('admin/user/active_anjali/'.$row['id']) ?>" data-toggle="tooltip" > 
										<button type="button" class="btn btn-success">Enter</button>
										</a>
										
									
									<?php endif ?>
		  </p>
        </div>
      </div>
       <?php endforeach ?>
          
    </div>    
  </div>
</div>
					
					
<style>
.container {
  padding: 10px;
}

ul li {
  list-style: none;
  
}
</style>					


<script>
function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
</script>
					
					
					
					
					
					
					
					
					
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



 