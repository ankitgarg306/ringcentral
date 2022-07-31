<div class="app-content content ">
<div class="content-body">
<div class="content-wrapper container-xxl p-0">
        <h1>Contacts</h1>
        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <i data-feather="bar-chart-2" class="font-large-2 mb-1"></i>
                                    <!-- modal trigger button -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal">
                                        Add Contacts
                                    </button>
                                </div>
                            </div>
                        </div>
      <table id="stdtable" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
        <tr>
          <th>Sr.No</th>
           <th>Name</th>
           <th>Patient ID</th>
           <th>MRN No.</th>
           <th>Phone Number</th>
           <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php 
		      		//   var_dump($all_contacts);
		     foreach($all_contacts as $r=>$val) {
			echo "<tr>"; 
			      echo "<td><center>".$r."</center></td>"; 
			      echo "<td>".$val->name."</td>";
                  echo "<td>".$val->patient_id."</td>";
                  echo "<td>".$val->mrn_no."</td>";
                  echo "<td>".$val->phone_no."</td>";
                  echo "<td> {$val->status}</td>";
                  echo "</tr>";
             }
            ?>
        </tbody>
      </table>
      </div>
      </div>
 
             <!-- pricing modal  -->
             <div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <div id="pricing-plan">
                            
                                    <div class="text-center">
                                        <h1 id="pricingModalTitle">Add Contacts</h1>
                                        <p class="mb-3">
                                            Upload CSV format file with patient  information.
                                        </p>
                                    </div>
                          

                                    <!-- pricing plan cards -->
                                    <div class="row pricing-card" style="justify-content:center;">
                                        <!-- basic plan -->
                                        <div class="col-4 col-lg-4">
                                            <div class="card basic-pricing border text-center shadow-none">
                                            <div class="card">
                                              <div class="card-header text-center">
                                                <strong>Upload CSV File</strong>
                                              </div>
                                              <div class="card-body">
                                                <form action="<?php echo site_url('ContactController/import_csv') ?>" method="post" enctype="multipart/form-data">
                                                  <div class="form-group mb-3">
                                                    <div class="mb-3">
                                                      <input type="file" name="file" class="form-control" id="file">
                                                    </div>					   
                                                  </div>
                                                  <div class="d-grid">
                                                    <input type="submit" name="submit" value="Upload" class="btn btn-dark" />
                                                  </div>
                                                </form>
                                                 <!-- Upload csv error message -->
                                                <div style="color:red;">
                            <?php
                            $error_msg = "";
                            if ($this->session->flashdata('error_msg') && $this->session->flashdata('error_msg') != "") {
                                $error_msg = $this->session->flashdata('error_msg');
                            }
                            echo $error_msg;
                            ?>
                        </div>
                        <div style="color:green;">
                            <?php
                            $success_msg = "";
                            if ($this->session->flashdata('success_msg') && $this->session->flashdata('success_msg') != "") {
                                $success_msg = $this->session->flashdata('success_msg');
                            }
                            echo $success_msg;
                            ?>
                        </div>
                                                 <!-- / Upload csv error message -->


                                              </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!--/ basic plan -->
                                      </div>
                                    <!--/ pricing plan cards -->

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing modal  -->
 