<div class="app-content content ">
	<div class="content-body">
		<div class="content-wrapper container-xxl p-0">

			<div class="col-md-4">
				<div class="card">
					<div class="card-body text-center">
						<i data-feather="bar-chart-2" class="font-large-2 mb-1"></i>
						<!-- modal trigger button -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#pricingModal">
							Add Template
						</button>
					</div>
				</div>
			</div>
			<!-- Upload csv error message -->
			<div class="alert alert-success" role="alert"> <?php echo $this->session->flashdata('template_success'); ?>
			</div>
			<div class="alert alert-danger" role="alert"> <?php echo $this->session->flashdata('template_error'); ?>
			</div>

		</div>

        <table id="stdtable" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
        <tr>
          <th>Sr.No</th>
           <th>Template Name</th>
           <th>Template Message</th>
           <!-- <th>Status</th> -->
        </tr>
        </thead>
        <tbody>
        <?php 
		      		//   var_dump($all_templates);
		     foreach($all_templates as $r=>$val) {
			echo "<tr>"; 
                  echo "<td><center>".($r+1)."</center></td>"; 
                  echo "<td>".$val['name']."</td>";
                  echo "<td>".$val['message']."</td>";
                //   echo "<td> {$val->status}</td>";
                  echo "</tr>";
             }
            ?>
        </tbody>
      </table>


		<!-- pricing modal  -->
		<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<div class="modal-header bg-transparent">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body px-sm-5 mx-50 pb-5">
						<div id="pricing-plan">

							<!-- Leave a Blog Comment -->
							<div class="col-12 mt-1">
								<h6 class="section-label mt-25">Add a message template</h6>
								<div class="card">
									<div class="card-body">
										<form method="post" class="form"
											action="<?php echo site_url('TemplateController/insert') ; ?>">
											<div class="row">
												<div class="col-sm-6 col-12">
													<div class="mb-2">
														<input type="text" class="form-control" placeholder="Name"
															name="template_name" />
													</div>
													<?php echo form_error('template_name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
												</div>

												<div class="col-12">
													<textarea class="form-control mb-2" rows="4" placeholder="Message"
														name="template_message"></textarea>
													<?php echo form_error('template_message', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

												</div>

												<div class="col-12">
													<button type="submit" class="btn btn-primary">Add template</button>
												</div>
											</div>
										</form>


									</div>
								</div>
							</div>
							<!--/ Leave a Blog Comment -->
						</div>
					</div>
				</div>

			</div>
			<!-- / pricing modal  -->
		</div>
	</div>
</div>