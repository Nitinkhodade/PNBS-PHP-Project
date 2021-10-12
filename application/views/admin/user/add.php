

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add New User</li>
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
                    <h4 class="m-b-0 text-white"> Add New User <a href="<?php echo base_url('admin/user/all_member_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Members </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/add') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Member Name <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<!--<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Email </label>
                                        <div class="col-md-9 controls">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>-->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Mobile </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
							<div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Due Fee </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="duefees" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                  
                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

</div>