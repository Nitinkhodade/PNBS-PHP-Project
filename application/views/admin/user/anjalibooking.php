
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
			<!--<h3 class="text-themecolor m-b-0 m-t-0"><?php echo $this->session->userdata('name');  ?></h3>-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Anjali</li>
            </ol>
        </div>
        
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
            
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Anjali Booking <!--<a href="#" class="btn btn-info pull-right"><i class="fa fa-list"></i> Edit </a>--></h4>

                    <!--<h4 class="m-b-0 text-white"> Add New Client <a href="<?php echo base_url('admin/user/all_user_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Users </a></h4>-->

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/add_anjalibooking') ?>" class="form-horizontal" enctype="multipart/form-data" novalidate>
                        <div class="form-body">
                            <br>
                           

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"> Select Days <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <select required class="form-control custom-select" onchange="getTopic(this.value)"  name="days" >
											 <option value=""> Select</option>
											 <!--   <option value="sashti">Sashti</option>-->
                                               <!--<option value="saptami">Saptami</option>-->
                                                        <option value="ashtami">Ashtami</option>
                                                        <option value="nabami">Nabami</option>
														<!--<option value="dashami">Dashami</option> -->
											
                                        </select>
                                        </div>
                                    </div>
                                </div>    
                            </div>
					<div id="day1" style="display:none;">
							<div class=" row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Time Slot <span class="text-danger">*</span></label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:00 AM To 11:30 AM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(1, 'sashti');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person11" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:30 AM To 12:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(2, 'sashti');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person12" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:00 PM To 12:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(3, 'sashti');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person13" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">&nbsp;</label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:30 PM To 01:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(4, 'sashti');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person14" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">01:00 PM To 01:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(5, 'sashti');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person15" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
                        
</div>

<div id="day2" style="display:none;">
							<div class=" row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Time Slot <span class="text-danger">*</span></label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:00 AM To 11:30 AM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(1, 'saptami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person21" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:30 AM To 12:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(2, 'saptami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person22" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:00 PM To 12:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(3, 'saptami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person23" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">&nbsp;</label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:30 PM To 01:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(4, 'saptami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person24" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">01:00 PM To 01:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(5, 'saptami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person25" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
                        
</div>




<div id="day3" style="display:none;">
							<div class=" row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Time Slot <span class="text-danger">*</span></label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:00 AM To 11:30 AM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(1, 'ashtami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person31" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:30 AM To 12:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(2, 'ashtami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person32" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:00 PM To 12:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(3, 'ashtami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person33" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">&nbsp;</label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:30 PM To 01:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(4, 'ashtami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person34" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">01:00 PM To 01:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(5, 'ashtami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person35" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
                        
</div>


<div id="day4" style="display:none;">
							<div class=" row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Time Slot <span class="text-danger">*</span></label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:00 AM To 11:30 AM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(1, 'nabami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person41" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:30 AM To 12:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(2, 'nabami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person42" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:00 PM To 12:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(3, 'nabami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person43" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">&nbsp;</label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:30 PM To 01:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(4, 'nabami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person44" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">01:00 PM To 01:30 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(5, 'nabami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person45" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
                        
</div>




<div id="day5" style="display:none;">
							<div class=" row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Time Slot <span class="text-danger">*</span></label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">11:00 AM To 12:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(1, 'dashami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person51" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">12:00 PM To 01:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(2, 'dashami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person52" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">01:00 PM To 02:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(3, 'dashami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person53" placeholder="Number of Person" class="form-control"   aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">&nbsp;</label>
										
                                        <div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">02:00 PM To 03:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(4, 'dashami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person54" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="card">
												<div class="card-body">
													<h4 class="text-center">03:00 PM To 04:00 PM</h4>
													<h5 class="text-center">Slots Available</h5>
													<h4 class="text-center" style="color: red;"><?php $firsts = $this->common_model->bookslotfirst1(5, 'dashami');
                                                  												echo (100 - $firsts['tperson']);	?></h4>
												</div>
												<div class="box b-t text-center">
													<input maxlength="1"  type="text" name="person55" placeholder="Number of Person" class="form-control"    aria-invalid="false">
											</div>
										</div>
										</div>
										
                                </div>
                              
                            </div>
							</div>
                        
</div>


						<!--  <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Total Number of Person <span class="text-danger">*</span></label>
                                        <div class="col-md-4 controls">
										<input maxlength="1"  type="number" name="totalperson" placeholder="Number of Person" class="form-control" required="" data-validation-required-message="max person allowed only two" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>  -->
					         <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                 <div class="col-md-9">
                                    <div class="form-group row">
									<label class="control-label text-right col-md-3">&nbsp;</label>
                                    <div class="col-md-9 controls">
                                    <h5 style="font-size: .8rem; color: #757575;"><li>Anjali is for members and their registered family members. </li></h5>
						            <h5 style="font-size: .8rem; color: #757575;"><li> Members can book Maximum 2 Slots, in case if all the family members are unable to come together.</li></h5>									
									<h5 style="font-size: .8rem; color: #757575;"><li> Members with valid registered COUPON CODE will be permitted.</li></h5>
									<h5 style="font-size: .8rem; color: #757575;"><li> Members are requested to be present during the allotted time or else will not be allowed.</li></h5>
									<h5 style="font-size: .8rem; color: #757575;"><li>Only number of persons registered for a particular batch will be allowed. Request not to bring any extra person along, the extra &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; person will not be allowed. </li></h5>	
									<h5 style="font-size: .8rem; color: #757575;"><li> Please make sure you reach 10-15 minutes before you booked slot.</li></h5>
									<h5 style="font-size: .8rem; color: #757575;"><li>If for any reason you are unable to make it for Pushpanjali kindly delete your booking, so the available slot can be given to others. </li></h5>
                                     <h5 style="font-size: .8rem; color: #757575;"><li> All the rights are reserved with the committee and request all the members to co-operate during this pandemic times.</li></h5>
								  </div>

								  </div>
                                </div>								
                            </div>		
							
							
                            <!-- CSRF token -->
                            <input    type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
   
   <div class="row">
        <div class="col-lg-12">

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
            
            <div class="card card-outline-warning">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> List of Anjali Booking <!--<a href="#" class="btn btn-info pull-right"><i class="fa fa-list"></i> Edit </a>--></h4>

                    <!--<h4 class="m-b-0 text-white"> Add New Client <a href="<?php echo base_url('admin/user/all_user_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Users </a></h4>-->

                </div>
                <div class="card-body">
                   
                        <div class="form-body">
                            <div class="table-responsive m-t-40">
					 <!--id="example23"-->
					 <?php //print_r($userlist); ?>
					 
					  <div class="row">
					 
					  <?php foreach($userlist as $userc) {
                             if($userc['days'] != "dashami") 
							 {
						  ?>
                                
                                <div class="col-md-3">
									<div class="card card-outline-danger">
										<div class="card-header">
											<h4 class="m-b-0 text-white"><?php echo ucfirst($userc['days']);  ?></h4>  
											
											
											</div>
										<div class="card-body">
											<h3 class="card-title"  ><?php echo slotbooking($userc['slotno']);  ?></h3>
											<p class="card-text"  >Number of person: <?php echo $userc['totalperson'];  ?></p>
											
											<?php if($userc['status'] == 0) {} else { ?> <p class="expire" style="color:red"> Entered</p> <?php } ?>
											
											<h3 class="card-title">Coupon Code </h3>
											
											<a href="#" class="btn-lg btn-inverse"><?php echo $userc['passcode'];  ?></a>
											<br>
											<br>
											<a href="<?php echo base_url(); ?>admin/user/deleteabook/<?php echo $userc['id'] ?>"  onclick="return confirm('Are you sure you want to cancel this slot?');" class="btn-lg  btn-danger">Cancel</a>
										</div>
									</div>
								</div>
					  <?php } } ?>
					 
					 
					 
                      <!--  <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th> Day</th>
                                    <th>Slot Booked</th>
									 <th>Number of person</th>	 
                                    <th>Assign Code</th>
									 
									
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($userlist as $userc) {  ?>
                                
                                <tr>
								<td><?php echo $userc['days'];  ?></td>
								<td><?php echo slotbooking($userc['slotno']);  ?></td>
								<td><?php echo $userc['totalperson'];  ?></td>
								<td><?php echo $userc['passcode'];  ?> </td>
								 
									
                                   
                                </tr>
							<?php } ?>
                          

                            </tbody>


                        </table> -->
                    </div>  </div>

                           
                        </div>

                </div>
            </div>
        </div>
    </div>

</div>


<script>
function getTopic(dbcall) {
        if(dbcall == "sashti")
		{
		   $("#day1").show();	
           $("#day2").hide();
			$("#day3").hide();
			$("#day4").hide();
			$("#day5").hide();		   
		}
       if(dbcall == "saptami")
		{
		    $("#day1").hide();	
		    $("#day2").show();		  
            $("#day3").hide();
			$("#day4").hide();
			$("#day5").hide();		   
		}
		if(dbcall == "ashtami")
		{
		    $("#day1").hide();	
		    $("#day2").hide();		  
            $("#day3").show();
			$("#day4").hide();
			$("#day5").hide();		   
		}
		if(dbcall == "nabami")
		{
		    $("#day1").hide();	
		    $("#day2").hide();		  
            $("#day3").hide();
			$("#day4").show();
			$("#day5").hide();		   
		}
        if(dbcall == "dashami")
		{
		    $("#day1").hide();	
		    $("#day2").hide();		  
            $("#day3").hide();
			$("#day4").hide();
			$("#day5").show();		   
		}
		    //$("#processing123").hide();
     
    }
    ;
</script>

<?php 

function slotbooking($no)
{
	 if($no ==1)
	 {
		  return "11:00 AM To 11:30 AM"; 
	 }
	 if($no ==2)
	 {
		  return "11:30 AM To 12:00 PM"; 
	 }
	 if($no ==3)
	 {
		  return "12:00 PM To 12:30 PM"; 
	 }
	 if($no ==4)
	 {
		  return "12:30 PM To 01:00 PM"; 
	 }
	 if($no ==5)
	 {
		  return "01:00 PM To 01:30 PM"; 
	 }
	 
	 return "No slot"; 
	 
}
?>







