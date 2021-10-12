<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 19:06:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/top.png">
    <title>PNBS Puja</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url() ?>assets/images/background/backgound_login.png);">   
        <!--<br><br><br><br><br><br><br><br><br>-->

			
            <div class="login-box card">
            <div class="card-body">
			
           <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?> 
				<form method="POST" action="<?php echo base_url('admin/user/add_client') ?>" class="form-horizontal form-material" enctype="multipart/form-data" >
				
                    <h3 class="box-title m-b-20">Sign Up</h3>
					<div class="row">  
					<div class="col-md-6">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" name="membername" placeholder="Member Name" required>
                        </div>
                    </div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" pattern="[789][0-9]{9}" name="mobile" required="" placeholder="Register Mobile Number">
                        </div>
                    </div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" required="" placeholder="Email">
                        </div>
                    </div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="memberaddress" required="" placeholder="Address">
                        </div>
                    </div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-6">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
					</div>
					<div class="col-md-6">
                    <div class="form-group ">                
                        <input class="form-control" type="number" name="familymembers" required="" placeholder="Family members">
						<!--<a href="javascript:void(0);" class="add_button" title="Add field"><img src="<?php echo base_url() ?>assets/images/background/add-icon.png"/></a>-->
                    </div>
					

					</div>
					<div class="col-md-6">
                    <div class="form-group ">                
                        <input class="form-control" type="number" name="vacc_member" required="" placeholder="Vaccinated member">
						<!--<a href="javascript:void(0);" class="add_button" title="Add field"><img src="<?php echo base_url() ?>assets/images/background/add-icon.png"/></a>-->
                    </div>
					

					</div>
					<div class="col-md-6">
                    <div class="form-group ">                
                        <input class="form-control" type="number" name="below18" required="" placeholder="Below 18 members">
						<!--<a href="javascript:void(0);" class="add_button" title="Add field"><img src="<?php echo base_url() ?>assets/images/background/add-icon.png"/></a>-->
                    </div>
					

					</div>
					<!--<div class="col-md-6">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="confirmpassword" required="" placeholder="Confirm Password">
                        </div>
                    </div>
					</div>-->
					</div>
				
					
					<!--<div class="row field_wrapper">
						<div class="col-md-4">
						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="name" required="" placeholder="Name">
							</div>
						</div>	
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="age" required="" placeholder="Age">
							</div>
						</div>	
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="relation" required="" placeholder="Relation">
							</div>
						</div>
						
						</div>

					</div>-->
					<input type="hidden" id="existingmember" name="member" value="Existing Member">
				<!--<div class="row">
					<div class="col-md-6">
							<div class="form-group ">
							<input type="radio" id="existingmember" name="member" value="Existing Member">
							  <label for="existingmember">Are you an Existing club member</label><br>
							 </div>
							</div>
				  <div class="col-md-6">
							<div class="form-group ">
							  <input type="radio" id="newmember" name="member" value="New Member">
							  <label for="newmember">Are you registering as a new member</label><br>
							</div>

		                   </div>
						   </div> -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-success p-t-0 p-l-10">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="<?php echo base_url(); ?>terms_and_conditions.html" target="_blank">Terms & Conditions</a></label>
                            </div>
                        </div>
                    </div>
					  <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
					  
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn btn-block text-uppercase waves-effect waves-light" type="submit" name="submit" value="submit">Sign Up</button>
						
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="<?php echo base_url('admin/pages/login') ?>" class="text-info m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
                
            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	
	
</body>

 

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row field_wrapper"><div class="col-md-4"><div class="form-group"><div class="col-xs-12"><input class="form-control" type="text" placeholder="Name" name="name[]" value=""/></div></div></div><div class="col-md-4"><div class="form-group"><div class="col-xs-12"><input class="form-control" type="text" placeholder="Age" name="age[]" value=""/></div></div></div><div class="col-md-4"><div class="form-group"><div class="col-xs-12"><input class="form-control" type="text" placeholder="Relation" name="relation[]" value=""/></div></div></div>  </div>   <a href="javascript:void(0);" class="remove_button"><img src="<?php echo base_url() ?>assets/images/background/remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>

<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 19:06:54 GMT -->
</html>

