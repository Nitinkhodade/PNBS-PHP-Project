<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");   ?>
<!-- Container fluid  -->
<!-- Container fluid  -->

<div class="container-fluid">

    <!-- Bread crumb and right sidebar toggle -->

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Member</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Bhog</li>
            </ol>
        </div>

    </div>

    <!-- End Bread crumb and right sidebar toggle -->



    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)) : ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span></button>
                </div>
            <?php endif ?>

            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Bhog Booking
                        <!--<a href="#" class="btn btn-info pull-right"><i class="fa fa-list"></i> Edit </a>-->
                    </h4>
					</div>
                <div class="card-body">


                    <form method="post" action="<?php echo base_url('admin/user/add_bhogbooking') ?>" class="form-horizontal" enctype="multipart/form-data" >

                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"> Select Day <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">

                                            <select required class="form-control custom-select" name="days" id="days">
                                            <option value=""> Select</option>
                                                <!--<option value="sashti">Sashti</option> -->
                                                <!--<option   value="saptami">Saptami</option>-->
                                                <option   value="ashtami">Ashtami</option>
                                                <option   value="nabami">Nabami</option>
                                            </select>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"> Number of Pack <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input class="form-control"   type="text" name="pack" id="pack"   value="" name="vertical-spin" required data-validation-required-message="Number of pack is required" onkeyup="calculate()">
                                            <span class="text-right mt-20">* You are entitled for max. 
											
											<?php
											  $checkvalidatesaptami  = $this->common_model->get_bhogcountdayuser('saptami');
											  $checkvalidateashtami  = $this->common_model->get_bhogcountdayuser('ashtami');
											  $checkvalidatenabami  = $this->common_model->get_bhogcountdayuser('nabami');
											 
											  
											  
											$firsts = $this->common_model->get_familymember();
											$ftm = $firsts['fammember'];
											$fam = (4 + $firsts['fammember']); 
											if($fam > 10)
											{   $fam = 10;} else{
											  $fam;}
											?> 
											10
											extra packs per day <span id="total_numeber_of_packetes"></span></span>
											<input type="hidden" name="ftm" value="<?php echo $ftm; ?>" >
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Total Amount Payable</label>
                                        <div class="col-md-9 controls">
                                            <span class="text-right mt-20">* Rs. <span id="amount"></span></span>

                                        </div>
                                    </div>
                                </div>

                            </div>
			
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" name="submit" value="submit" class="btn btn-success">Pay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                 <div class="col-md-9">
                                    <div class="form-group row">
									<label class="control-label text-right col-md-3">&nbsp;</label>
                                    <div class="col-md-9 controls">
									<ul>
									<li><h5 style="font-size: .8rem; color: #757575;">Bhog bookings are for Members and their family members only.</h5></li>
									<li><h5 style="font-size: .8rem; color: #757575;">Bhog is free for Members and their registered family members, anything extra is chargeable at Rs. 51 per pack.</h5></li>
									<li><h5 style="font-size: .8rem; color: #757575;">The maximum numbers of extra packs are mentioned above.</h5></li>
							        <li><h5 style="font-size: .8rem; color: #757575;">Bhog Bookings will be closed at mid night prior i.e. if member want to book for Saptami Bhog, 12th Oct 2021 has to book max by 11:55 pm of 11th Oct 2021, or else will not be allowed.</h5></li>
							        <li><h5 style="font-size: .8rem; color: #757575;">Each Bhog pack will be deliver in plastic containers, and each pack will have 4 containers.</h5></li>
							        <li><h5 style="font-size: .8rem; color: #757575;">Members are requested to bring their own carry bags. We are not providing any carry bags.</h5></li>
							        <li><h5 style="font-size: .8rem; color: #757575;"><b>In case if member are unable to collect the bhog in their allotted time, in that case the member will be allowed to collect bhog after 3:00 PM</b></h5></li> 
									<li><h5 style="font-size: .8rem; color: #757575;"><b>There is no refund.</b></h5></li>
									<li><h5 style="font-size: .8rem; color: #757575;"><b>Only one person with the Bhog Coupon Code will be allowed.</b></h5></li>
									<li><h5 style="font-size: .8rem; color: #757575;"><b>All the rights are reserved with the committee and request all the members to co-operate during this pandemic times.</b></h5></li>								
							</ul>
						            
									
									
									
									
									
									
									
									
									
								   
								  </div>

								  </div>
                                </div>								
                            </div>

                            <!-- CSRF token -->
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>






    <div class="row">
        <div class="col-lg-12">

           

            <div class="card card-outline-warning">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> List of Bhog Booking
                        <!--<a href="#" class="btn btn-info pull-right"><i class="fa fa-list"></i> Edit </a>-->
                    </h4>

                    <!--<h4 class="m-b-0 text-white"> Add New Client <a href="<?php echo base_url('admin/user/all_user_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Users </a></h4>-->

                </div>
                <div class="card-body">

                    <div class="form-body">
                        <div class="table-responsive m-t-40">
                              <div class="row">
							  <?php foreach($bhoglist as $userc) {  ?>
                                 <div class="col-md-3">
									<div class="card card-outline-danger">
										<div class="card-header">
											<h4 class="m-b-0 text-white"><?php echo ucfirst($userc['days']);  ?></h4></div>
										<div class="card-body">
											<?php if($userc['amount'] == 0) {} else { ?><h3 class="card-title">Amount <?php echo $userc['amount'];  ?></h3> <?php } ?>
											<p class="card-text" >Number of pack: <?php echo $userc['numberofpack'];  ?>
											<br> Collection Time: <?php echo $userc['collectiontime'];  ?></p>
                                            
											<?php if($userc['status'] == 0) {} else { ?> <p class="expire" style="color:red">Coupon Expired</p> <?php } ?>
											
											<h3 class="card-title">Coupon Code </h3><a href="#" class="btn-lg btn-inverse"><?php echo $userc['coupancode'];  ?></a>
											
											
											
											
											

											
											<!--<?php //if ($userc['status'] == 0): ?>
                                            <div class="label label-table label-danger">Collected</div>-->
                                        									
									
										</div>
									</div>
								</div>
							  
							  	<?php } ?>
							  </div>
							
							
							
                           <!-- <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Number of pack</th>
                                        <th>Total Amount</th>
                                        <th>Coupon Code</th>
                                        <th>Collection Time</th>
                                        <th>Collected</th>
                                        <th>Created Timing</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								
								
								<?php foreach($bhoglist as $userc) {  ?>
                                
                                <tr>
								<td><?php echo $userc['days'];  ?></td>
								<td><?php echo $userc['numberofpack'];  ?></td>
								<td><?php echo $userc['amount'];  ?></td>
								<td><?php echo $userc['coupancode'];  ?> </td>
								<td><?php echo $userc['collectiontime'];  ?> </td> 
								<td><?php echo $userc['collected'];  ?> </td> 
								<td><?php echo $userc['created_on'];  ?> </td> 
									
                                   
                                </tr>
							<?php } ?>
							
                                </tbody>


                            </table> -->
							
							
							
							




                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>










<script>
 function calculate() {

        var myBox1 = $('#pack').val();
		 var mypacks = $('#pack').val();
		 var days = $('#days').val();
		
		if(myBox1 == "")
		{
			alert("Please enter pack"); return;
		}
        var simple = '<?php echo $ftm; ?>';
		if(days == "saptami")
		{
		   var ssaptami = '<?php echo $checkvalidatesaptami["total_pack"]; ?>'; 
           if(ssaptami) {		  
           myBox1 = parseInt(myBox1) + parseInt(ssaptami);  
		     }
 		   
		}
		if(days == "ashtami")
		{
		   var sashtami = '<?php echo $checkvalidateashtami["total_pack"]; ?>';
		   if(sashtami) {
            myBox1 = parseInt(myBox1) + parseInt(sashtami);  		   
			}
		}
		if(days == "nabami")
		{
		   var snabami = '<?php echo $checkvalidatenabami["total_pack"]; ?>'; 
           if(snabami) {		   
		    myBox1 = parseInt(myBox1) + parseInt(snabami);
			}
		}
		
		
		
			
		if(myBox1 > 10)
		{
		alert("You are entitled for max. 10 of packs per day"); 
		return;
		}
		
		//alert(myBox1);
		
		//var mynewbox = getTopic(myBox1, days);
		//alert(mynewbox); return;
		if(parseInt(simple) > parseInt(myBox1))
		{	 
	       var myBox2 = 0; 
	       var myResult = 0;
               		   
		}
		else
		{ 
	    
	      var myBox2 = 51;
	      var mybox3 = myBox1 - simple;		   
		 // alert(mybox3); 
		 
          var myResult = mypacks * myBox2;  
       	} 
		//alert(myResult); 
		$('#amount').html(myResult);
		
		/*if(myBox1 <= simple){

			var myBox2 = 21;
		var myResult = myBox1 * myBox2;
		$('#amount').html(myResult);	
		}*/
		
			
        //if (myBox1 > = simple) {

          //alert("You are entitled for max of packs per day " + simple);

        //}else{
          //  var myBox2 = 50;
            //var myResult = myBox1 * myBox2;
         //   $('#amount').html(myResult);
        //}
            
        

    }
    window.onload = calculate();
</script>


