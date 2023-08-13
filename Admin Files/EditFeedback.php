<?php 

	include "header.php";
?>
<?php

	$ref_id = $_REQUEST['ref_id'];
	$con = mysqli_connect("localhost","root","","ofdproject");
	
	$q = "select * from contactpage where ref_id='$ref_id'";
	
	$c = mysqli_query($con,$q);
	
	while($row=mysqli_fetch_array($c))
	{
		$custmor_name=$row['custmor_name'];
		$custmor_email=$row['custmor_email'];
		$subject=$row['subject'];
		$message=$row['message'];
	}
?>
<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">FeedBack</h4>
								
								<form action="#" method="POST">
									
	
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Customer Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="customer_name" placeholder="Enter Customer Name" value="<?php echo $custmor_name;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Email id<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="custmor_email" placeholder="Enter Email Id" value="<?php echo $custmor_email;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Subject<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="subject" placeholder="Enter Subject" value="<?php echo $subject;?>">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Description<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="message" placeholder="Enter Description" value="<?php echo $message;?>">
                                            </div>
                                        </div>
										
										
										
							
										
										<div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
												<input type="submit" name="updatebtn" value="UPDATE" class="btn btn-primary" />
											</div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
	
<?php
	include "footer.php";
?>