<?php
	include "header.php";
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
                                <h4 class="card-title">Registration Record</h4>
							
                                <div class="table-responsive">
								<form action="#" method="POST">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                                <th>User_ID</th>
                                                <th>Name</th>
                                                <th>Email_ID</th>
												<th>Password</th>
                                            </tr>
                                        
                                            <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from signuppage");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['user_id']."<?td>";
													echo "<td>".$row['fname'].$row['lname']."<?td>";
													echo "<td>".$row['customer_email']."<?td>";
													echo "<td>".$row['pass']."<?td>";
													echo "</tr>";
												}
											?>
                                        
                                    </table>
									</form>
									
                                </div>
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