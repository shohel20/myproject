<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Bordered Table</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="">Sl No</th>
													<th class="">Full Name</th>
													<th class="">Email Address</th>
													<th class="">Action</th>
													
												</tr>
											</thead>
											<tbody>
                                                <?php 
                                                include('cms-crud.php');
                                                $query = "SELECT * FROM person";
                                               $result =  getAllData($query);
                                              $serial = 1;

                                              while($row = mysqli_fetch_assoc($result) ){

                                              
                                                ?>
												<tr>
                                                    <td> <?php echo $serial?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $row['email']?></td>
                                                    <td></td>

                                                </tr>

                                                <?php 
                                                $serial++;
                                              }
                                                ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>