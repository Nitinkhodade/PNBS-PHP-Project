
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

                <div class="card-body">
            
                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
									<th>Status</th>
								    <th>Name</th>
                                    <th>Day</th>
                                    <th>Code</th>
                                    <th>Time Slot</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!--<tfoot>
                                <tr>
                                    <th>Day</th>
                                    <th>Code</th>
                                    <th>Time Slot</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>-->
                            
                            <tbody>
                            <?php  //print_r($anjali);die;    
							foreach ($anjali1 as $row): ?>
                                
                                <tr>
									<td>
                                        <?php if ($row['status'] == 0): ?>
                                            <div class="label label-table label-danger">Anjali Pending</div>
                                        <?php else: ?>
                                            <div class="label label-table label-success">Anjali Delivered</div>
                                        <?php endif ?>
                                    </td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['days'] ?></td>
									<td><?php echo $row['passcode']; ?></td>
                                    <td><?php echo $row['created_on']; ?></td>
									
									<td>
									<?php if ($row['status'] == 1): ?>
									
										<a href="<?php echo base_url('admin/user/deactive_anjali/'.$row['id']) ?>" data-toggle="tooltip"> 
											<button type="button" class="btn btn-success">Deactive</button>
										</a>
											
										<!--<a href="<?php echo base_url('admin/user/deactive_anjali/'.$row['id']) ?>" data-toggle="tooltip" data-original-title="Deactive"> <i class="fa fa-close text-danger m-r-10"></i> </a>-->
									<?php else: ?>
										<!-- <a href="<?php echo base_url('admin/user/active_anjali/'.$row['id']) ?>" data-toggle="tooltip" data-original-title="Active"> <i class="fa fa-check text-info m-r-10"></i> </a> -->
											
										<a href="<?php echo base_url('admin/user/active_anjali/'.$row['id']) ?>" data-toggle="tooltip" > 
										<button type="button" class="btn btn-success">Enter</button>
										</a>
  
											
									<?php endif ?>
									</td>
                                    
									
									<!--<td> <a href="#" class="btn btn-danger"> Done</a></td>-->
                         
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



<?php foreach ($anjali1 as $row): ?>
 
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