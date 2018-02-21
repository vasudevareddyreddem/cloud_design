<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
			<div class="page-content-wrapper">
                <div class="page-content">
                    
					<div class="row">
                       <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                     <header>My worksheet</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Queue No</th>
                                                <th>Slot</th>
												<th>PURN</th>
                                                <th>Patient Name </th>
                                                <th>Age/Sex</th>
                                                <th>Visit Type</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>xxxxxx</td>
                                                <td><button class="btn btn-xs bg-success no-margin" type="button">New</button></td>
                                                <td>xxxxxx500</td>
                                                <td>Dummy Name</td>
                                                
												<td> 40 / M</td>
												<td>VIP</td>
                                                <td>
                                                  <button class="btn btn-xs bg-success no-margin" type="button">Call</button>
												  <a href="consultation.php" class="btn btn-xs bg-primary no-margin" type="button">Start Consultation</a>
												  <button class="btn btn-xs bg-danger no-margin" type="button">Close</button>
                                                </td>
                                            </tr>
											
                                        </tbody>
                                    </table>
                                </div>
								<div class="clearfix">&nbsp;</div>
												<div class="text-center">
												<div class="col-md-12">
                                                    <a href="financial.php" class="btn btn-info">Save</a>
                                                    <a href="#"type="button" class="btn btn-default">Cancel</a>
                                                </div>
                                                </div>
                            </div>
                        </div>
                    </div>
				
                    
                </div>
            </div>
<?php include('footer.php'); ?>