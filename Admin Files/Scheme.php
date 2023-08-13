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
                                <h4 class="card-title">Offers & Discount</h4>
								<h5>
								<a href="alterscheme.php" style="float:right">Add Offers</a>
								</h5>
                                <div class="table-responsive">
								<form action="alterscheme.php" method="POST">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                                <th>Cashback_ID</th>
                                                <th>Offers</th>
                                                <th>Start_Date</th>
                                                <th>End_Date</th>
												<th>Terms_And_Condition</th>
												<th>Action</th>
                                            </tr>
                                        
                                           <?php
												$cn=mysqli_connect("localhost","root","","ofdproject");
												$rs=mysqli_query($cn,"select * from schemes");
												while($row=mysqli_fetch_array($rs))
												{
													echo "<tr>";
													echo "<td>".$row['cashback_id']."<?td>";
													echo "<td>".$row['offer']."<?td>";
													echo "<td>".$row['start_date']."<?td>";
													echo "<td>".$row['end_date']."<?td>";
													echo "<td>".$row['terms_and_condition']."<?td>";
												
										?>
											<td>
												<i class="fa fa-edit"></i>&nbsp;
												<a href="EditScheme.php?cashback_id=<?php echo $row['cashback_id'];?>">EDIT</a><br>
												<i class="fa fa-trash"></i>&nbsp; 
												<a href="DeleteScheme.php?cashback_id=<?php echo $row['cashback_id'];?>">DELETE</a>
											</td>
											
											<?php
											
												echo "</tr>";
												}
											?>
                                        </form>
                                    </table>
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