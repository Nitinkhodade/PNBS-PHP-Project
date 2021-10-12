

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <!-- <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    
    <a href="<?php echo base_url('admin/user/all_user_list') ?>">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-users fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->total; ?></h3>
                        <h5 class="text-muted m-b-0">Total Member</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-success">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->active_user; ?></h3>
                        <h5 class="text-muted m-b-0">Active Member</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-danger">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-times fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count->inactive_user; ?></h3>
                        <h5 class="text-muted m-b-0">Inactive Member</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-primary">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info">3</h3>
                        <h5 class="text-muted m-b-0">Total Admin</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    </a>
    <h3 class="text-themecolor m-b-0 m-t-0">Bhog Summary</h3>
	<a href="<?php echo base_url('admin/user/bhog') ?>">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count2->saptami_packs; ?></h3>
                        <h5 class="text-muted m-b-0">Saptami Total Packs</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-success">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count3->ashtami_packs; ?></h3>
                        <h5 class="text-muted m-b-0">Ashatami Total Packs</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-primary">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count4->nabami_packs; ?></h3>
                        <h5 class="text-muted m-b-0">Nabami Total Packs</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
	</a>
    <h3 class="text-themecolor m-b-0 m-t-0">Anjali Booking Summary</h3>
	<div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Saptami</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
						    <!--<h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php  //$hotel_name = array_column($count5, 'saptami_anjalipacks'); die;//foreach($count5 as $row) { echo $row[0]['saptami_anjalipacks']; } die; ?></b></div>-->
                            <h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php  echo $count5['saptami_anjalipacks']; ?></b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">11:30 AM To 12:00 PM</h6><b><?php echo $count5['saptami_anjalipacks1']; ?></b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">12:00 PM To 12:30 PM</h6><b><?php echo $count5['saptami_anjalipacks2']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">12:30 PM To 01:00 PM</h6><b><?php echo $count5['saptami_anjalipacks3']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php echo $count5['saptami_anjalipacks4']; ?></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ashatami</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
                            <h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php echo $count6['ashtami_anjalipacks']; ?></b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">11:30 AM To 12:00 PM</h6><b><?php echo $count6['ashtami_anjalipacks1']; ?></b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">12:00 PM To 12:30 PM</h6><b><?php echo $count6['ashtami_anjalipacks2']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">12:30 PM To 01:00 PM</h6><b><?php echo $count6['ashtami_anjalipacks3']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php echo $count6['ashtami_anjalipacks4']; ?></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nabami</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
                            <h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php echo $count7['nabami_anjalipacks']; ?></b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">11:30 AM To 12:00 PM</h6><b><?php echo $count7['nabami_anjalipacks1']; ?></b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">12:00 PM To 12:30 PM</h6><b><?php echo $count7['nabami_anjalipacks2']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">12:30 PM To 01:00 PM</h6><b><?php echo $count7['nabami_anjalipacks3']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php echo $count7['nabami_anjalipacks4']; ?></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
	
	
	
	
	    <!--Bhog Booking Summary -->

    <h3 class="text-themecolor m-b-0 m-t-0">Bhog Booking Summary</h3>
	<div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Saptami</h4>
                    <div class="d-flex flex-row">
                        <div class="p-10 p-l-0 b-r">
						    <!--<h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php  //$hotel_name = array_column($count5, 'saptami_anjalipacks'); die;//foreach($count5 as $row) { echo $row[0]['saptami_anjalipacks']; } die; ?></b></div>-->
                            <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php  echo $count41['saptami_bhogpacks']; ?></b></div>
                        <div class="p-10 b-r">
                            <h6 class="font-light">01:30 PM To 02:00 PM</h6><b><?php echo $count41['saptami_bhogpacks1']; ?></b>
                        </div>
                        <div class="p-10">
                            <h6 class="font-light">02:00 PM To 02:30 PM</h6><b><?php echo $count41['saptami_bhogpacks2']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">02:30 PM To 03:00 PM</h6><b><?php echo $count41['saptami_bhogpacks3']; ?></b>
                        </div>
						<div class="p-10">
                            <h6 class="font-light">03:00 PM To 03:30 PM</h6><b><?php echo $count41['saptami_bhogpacks4']; ?></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ashatami</h4>
                <div class="d-flex flex-row">
                    <div class="p-10 p-l-0 b-r">
                        <!--<h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php  //$hotel_name = array_column($count5, 'saptami_bhogpacks'); die;//foreach($count5 as $row) { echo $row[0]['saptami_bhogpacks']; } die; ?></b></div>-->
                        <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php  echo $count42['ashatami_bhogpacks']; ?></b></div>
                    <div class="p-10 b-r">
                        <h6 class="font-light">01:30 PM To 02:00 PM</h6><b><?php echo $count42['ashatami_bhogpacks1']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">02:00 PM To 02:30 PM</h6><b><?php echo $count42['ashatami_bhogpacks2']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">02:30 PM To 03:00 PM</h6><b><?php echo $count42['ashatami_bhogpacks3']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">03:00 PM To 03:30 PM</h6><b><?php echo $count42['ashatami_bhogpacks4']; ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nabami</h4>
                <div class="d-flex flex-row">
                    <div class="p-10 p-l-0 b-r">
                        <!--<h6 class="font-light">11:00 AM To 11:30 AM</h6><b><?php  //$hotel_name = array_column($count5, 'saptami_bhogpacks'); die;//foreach($count5 as $row) { echo $row[0]['saptami_bhogpacks']; } die; ?></b></div>-->
                        <h6 class="font-light">01:00 PM To 01:30 PM</h6><b><?php  echo $count43['nabami_bhogpacks']; ?></b></div>
                    <div class="p-10 b-r">
                        <h6 class="font-light">01:30 PM To 02:00 PM</h6><b><?php echo $count43['nabami_bhogpacks1']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">02:00 PM To 02:30 PM</h6><b><?php echo $count43['nabami_bhogpacks2']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">02:30 PM To 03:00 PM</h6><b><?php echo $count43['nabami_bhogpacks3']; ?></b>
                    </div>
                    <div class="p-10">
                        <h6 class="font-light">03:00 PM To 03:30 PM</h6><b><?php echo $count43['nabami_bhogpacks4']; ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>
 
 
	
	
	
	
	
	
	
	
	<h3 class="text-themecolor m-b-0 m-t-0">Dashami Booking Summary</h3>
	<!-- Row -->
    <div class="row">
	<!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count8['dashami_packs']; ?></h3>
                        <h5 class="text-muted m-b-0">11:00 AM To 12:00 PM</h5></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $count8['dashami_packs1']; ?></h3>
                        <h5 class="text-muted m-b-0">12:00 PM To 01:00 PM</h5></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-success">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-success"><?php echo $count8['dashami_packs2']; ?></h3>
                        <h5 class="text-muted m-b-0">01:00 PM To 02:00 PM</h5></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-inverse">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0"><?php echo $count8['dashami_packs3']; ?></h3>
                        <h5 class="text-muted m-b-0">02:00 PM To 03:00 PM</h5></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-primary">
                        <h3 class="text-white box m-b-0"><i class="fa fa-user-circle fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-primary"><?php echo $count8['dashami_packs4']; ?></h3>
                        <h5 class="text-muted m-b-0">03:00 PM To 04:00 PM</h5></div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->

 
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
            