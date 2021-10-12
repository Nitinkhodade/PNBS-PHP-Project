

<!-- Container fluid  -->

<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">All Bhog</li>
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
					<h3 class="text-themecolor m-b-0 m-t-0">Bhog Booking</h3>
				</div>
				<div class="card-body">
				 	
					
					
					
			<div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
								 <th>Name</th>
                                    <th>Day</th>
                                    <th>Pack</th>
                                    
                                    <th>Code</th>
									<th>time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             
                            
                            <tbody>
                            <?php foreach ($bhog as $user): ?>
                                
                                <tr>
                                      <td><?php echo $user['first_name'] ?></td>
                                    <td><?php echo $user['days'] ?></td>
                                    <td><?php echo $user['numberofpack']; ?></td>
                                    <td><?php echo $user['coupancode']; ?></td>
									<td><?php echo $user['collectiontime']; ?></td>
                                    <td class="text-nowrap">
                                            <a href="<?php echo base_url('admin/user/updatebhog/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>

                                          
                                       
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
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



<?php foreach ($bhog as $row): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $row['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
            <div class="form-body">
                
                Are you sure want to delete? <br> <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="<?php echo base_url('admin/user/delete/'.$row['id']) ?>" class="btn btn-danger"> Delete</a>
                
            </div>

      </div>


    </div>
  </div>
</div>


<?php endforeach ?>

